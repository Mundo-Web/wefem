<?php

namespace App\Http\Controllers;

use App\Jobs\SendSaleEmail;
use App\Jobs\SendSaleWhatsApp;
use App\Models\CulqiSubscription;
use App\Models\Sale;
use App\Models\User;
use Culqi\Culqi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SoDe\Extend\Crypto;
use SoDe\Extend\Fetch;
use SoDe\Extend\JSON;
use SoDe\Extend\Math;
use SoDe\Extend\Response;
use Illuminate\Support\Str;
use SoDe\Extend\Text;

class CulqiController extends Controller
{
  private $culqi = null;
  private $url = null;

  public function __construct()
  {
    $this->culqi = new Culqi(['api_key' => env('CULQI_PRIVATE_KEY')]);
    $this->url = env('CULQI_API');
  }

  public function order(Request $request)
  {
    $response = Response::simpleTryCatch(function () use ($request) {

      [$status, $sale] = SaleController::create($request->sale, $request->details);

      if (!$status) throw new Exception($sale['error']);

      if ($sale->renewal_id) $this->createPlan($sale);

      $amount = $sale['amount'];

      if (isset($sale['delivery'])) $amount += $sale['delivery'];
      if (isset($sale['bundle_discount'])) $amount -= $sale['bundle_discount'];
      if (isset($sale['renewal_discount'])) $amount -= $sale['renewal_discount'];
      if (isset($sale['coupon_discount'])) $amount -= $sale['coupon_discount'];

      $config = [
        "amount" => Math::ceil(($amount * 100)),
        "currency_code" => 'PEN',
        "description" => "Compra en " . env('APP_NAME'),
        "order_number" => '#' . env('APP_CORRELATIVE') . '-' . $sale['code'],
        "client_details" => array(
          "first_name" =>  $sale['name'],
          "last_name" => $sale['lastname'],
          "email" => $sale['email'],
          "phone_number" => $sale['phone'],
        ),
        "expiration_date" => time() + (24 * 60 * 60), // produccion
        // "expiration_date" => time() + (60), // desarrollo
        "confirm" => false
      ];

      $order = $this->culqi->Orders->create($config);

      if (gettype($order) == 'string') {
        $res = JSON::parse((string) $order);
        Sale::where('id', $sale['id'])->delete();
        throw new Exception($res['user_message']);
      }
      return \array_merge((array) $order, [
        'amount' => Math::ceil($amount, 2),
        'delivery' => $sale['delivery'],
      ]);
    });

    return response($response->toArray(), $response->status);
  }

  public function token(Request $request)
  {
    $order_number = \str_replace('#' . env('APP_CORRELATIVE') . '-', '', $request->order);
    $sale = Sale::where('code', $order_number)->first();

    $response = Response::simpleTryCatch(function () use ($request, $sale) {

      if ($sale->renewal_id) {
        $cq_cus_id = $this->createClient();
        $cq_crd_id = $this->createCard($cq_cus_id, $request->token['id']);
        $cq_pln_id = $this->createPlan($sale);
        $cq_sxn_id = $this->subscribe($cq_crd_id, $cq_pln_id, $sale);

        CulqiSubscription::create([
          'renewal_id' => $sale->renewal_id,
          'user_id' => Auth::user()->id,
          'cq_crd_id' => $cq_crd_id,
          'cq_pln_id' => $cq_pln_id,
          'cq_sxn_id' => $cq_sxn_id
        ]);
      } else {
        $this->createCharge($request->token, $sale);
      }

      $sale->status_id = '312f9a91-d3f2-4672-a6bf-678967616cac';
      $sale->save();

      SendSaleWhatsApp::dispatchAfterResponse($sale);
      SendSaleEmail::dispatchAfterResponse($sale);
    }, function () use ($sale) {
      $sale->update(['status_id' => 'd3a77651-15df-4fdc-a3db-91d6a8f4247c']);
    });
    return response($response->toArray(), $response->status);
  }

  private function createCharge($token, $sale): void
  {
    $amount = $sale->amount;
    if (isset($sale->delivery)) $amount += $sale->delivery;
    if (isset($sale->bundle_discount)) $amount -= $sale->bundle_discount;
    if (isset($sale->renewal_discount)) $amount -= $sale->renewal_discount;
    if (isset($sale->coupon_discount)) $amount -= $sale->coupon_discount;

    $config = [
      "amount" => Math::ceil(($amount * 100)),
      "capture" => true,
      "currency_code" => "PEN",
      "order_number" => '#' . env('APP_CORRELATIVE') . '-' . $sale->code,
      "description" => "Compra en " . env('APP_NAME'),
      "email" => $token['email'] ?? $sale->email,
      "installments" => 0,
      "antifraud_details" => [
        "address" => $sale->address,
        "address_city" => $sale->district ?? 'Lima',
        "country_code" => "PE",
        "first_name" => $sale->name,
        "last_name" => $sale->lastname,
        "phone_number" => $sale->phone,
      ],
      "source_id" => $token['id']
    ];

    $charge = $this->culqi->Charges->create($config);

    if (gettype($charge) == 'string') {
      $res = JSON::parse((string) $charge);
      throw new Exception($res['user_message']);
    }
  }

  private function createClient(): string
  {
    $user = Auth::user();

    $resGet = new Fetch($this->url . '/customers?email=' . $user->email, [
      'headers' => ['Authorization' => 'Bearer ' . \env('CULQI_PRIVATE_KEY')]
    ]);

    if (!$resGet->ok) throw new Exception('Ocurrio un error al consultar clientes en Culqi');

    $dataGet = $resGet->json();

    if (count($dataGet['data']) > 0) {
      $cq_cus_id = $dataGet['data'][0]['id'];
      User::where('id', $user->id)->update(['cq_cus_id' => $cq_cus_id]);
      return $cq_cus_id;
    }

    $res = new Fetch($this->url . '/customers', [
      'method' => 'POST',
      'headers' => [
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer ' . \env('CULQI_PRIVATE_KEY')
      ],
      'body' => [
        "first_name" => $user->name,
        "last_name" => $user->lastname,
        "email" => $user->email,
        "address" => $user->address . ' ' . $user->address_number,
        "address_city" => $user->district ?? $user->province,
        "country_code" => "PE",
        "phone_number" => $user->phone
      ]
    ]);

    if (!$res->ok) throw new Exception('Ocurrio un error al crear el cliente en Culqi');
    $data = $res->json();
    User::where('id', $user->id)
      ->update(['cq_cus_id' => $data['id']]);
    return $data['id'];
  }

  private function createCard($cq_cus_id, $token): string
  {
    $res = new Fetch($this->url . '/cards', [
      'method' => 'POST',
      'headers' => [
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer ' . \env('CULQI_PRIVATE_KEY')
      ],
      'body' => [
        "customer_id" => $cq_cus_id,
        "token_id" => $token,
        "validate" => true,
        "metadata" => [
          "marca_tarjeta" => "VISA"
        ]
      ]
    ]);
    if (!$res->ok) throw new Exception('Ocurrio un error al crear la tarjeta en Culqi');
    $data = $res->json();
    return $data['id'];
  }

  private function createPlan(Sale $sale)
  {
    if (!$sale->renewal_id) throw new Exception('No hay una suscripción vinculada a la venta');

    $name = Text::keep($sale->renewal->name
      . ' - ' . explode(' ', $sale->name)[0]
      . ' ' . explode(' ', $sale->lastname)[0]
      . ' ' . Crypto::short(), 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789- ');
    $normalAmount = $sale->amount - $sale->bundle_discount - $sale->renewal_discount;

    $amount = $normalAmount / $sale->renewal->months;

    $discount = $normalAmount - $sale->coupon_discount;

    $body = [
      "name" => $name,
      "short_name" => Str::slug($name),
      "description" => 'Plan ' . $name,
      "amount" => Math::ceil($amount * 100),
      "currency" => "PEN",
      "interval_unit_time" => 3,
      "interval_count" => 0,
    ];

    if ($amount != $discount) {
      $body["initial_cycles"] = [
        "count" => 1, // Solo primer mes
        "has_initial_charge" => $discount != 0,
        "amount" => Math::ceil($discount * 100),
        "interval_unit_time" => 3
      ];
    } else {
      $body["initial_cycles"] = [
        "count" => 0, // Solo primer mes
        "has_initial_charge" => false,
        "amount" => 0,
        "interval_unit_time" => 3
      ];
    }

    $res = new Fetch($this->url . '/recurrent/plans/create', [
      'method' => 'POST',
      'headers' => [
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer ' . \env('CULQI_PRIVATE_KEY')
      ],
      'body' => $body
    ]);

    dump($name . ': ' . $res->text());

    if (!$res->ok) throw new Exception('Ocurrio un error al crear el plan en Culqi');

    $data = $res->json();

    return $data['id'];
  }

  private function subscribe($cq_crd_id, $cq_pln_id, $sale)
  {
    $res = new Fetch($this->url . '/recurrent/subscriptions/create', [
      'method' => 'POST',
      'headers' => [
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer ' . \env('CULQI_PRIVATE_KEY')
      ],
      'body' => [
        "card_id" => $cq_crd_id,
        "plan_id" => $cq_pln_id,
        "tyc" => true,
        "metadata" => [
          'user_id' => Auth::user()->id,
          'sale_id' => $sale->id
        ]
      ]
    ]);

    if (!$res->ok) throw new Exception('Ocurrio un error al crear la subscripcion');
    $data = $res->json();
    return $data['id'];
  }

  public function webhook(Request $request)
  {
    $response = Response::simpleTryCatch(function () use ($request) {
      $data = JSON::parse($request->data);
      $res = new Fetch($this->url . '/orders/' . $data['id'], [
        'headers' => [
          'Authorization' => 'Bearer ' . \env('CULQI_PRIVATE_KEY')
        ]
      ]);

      if (!$res->ok) throw new Exception("Ocurrio un error al verificar la orden de pago");

      $data = $res->json();

      $code = str_replace('#' . env('APP_CORRELATIVE') . '-', '', $data['order_number']);

      if ($data['state'] == 'expired') {
        Sale::where('code', $code)
          ->where('status_id', 'f13fa605-72dd-4729-beaa-ee14c9bbc47b')
          ->update(['status_id' => 'd3a77651-15df-4fdc-a3db-91d6a8f4247c']);
        return;
      }

      if ($data['state'] != 'paid') return;

      $sale = Sale::where('code', $code)->first();
      $sale->status_id = '312f9a91-d3f2-4672-a6bf-678967616cac';
      $sale->save();

      SendSaleWhatsApp::dispatchAfterResponse($sale);
      SendSaleEmail::dispatchAfterResponse($sale);
    });

    return response($response->toArray(), $response->status);
  }
}
