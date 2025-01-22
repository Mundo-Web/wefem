<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BasicController;
use App\Http\Controllers\Controller;
use App\Models\Formula;
use App\Models\Sale;
use App\Models\Status;
use Exception;
use Illuminate\Http\Request;
use SoDe\Extend\Response;

class SaleController extends BasicController
{
    public $model = Sale::class;
    public $reactView = 'Admin/Sales';
    public $prefix4filter = 'sales';
    public $with4get = [
        'formula',
        'formula.hasTreatment',
        'formula.scalpType',
        'formula.hairType',
        'formula.fragrance',
        'status',
        'details',
        'renewal',
        'bundle',
        'coupon'
    ];

    public function get(Request $request, string $id)
    {
        $response = Response::simpleTryCatch(function () use ($id) {
            $jpa  = $this->model::with($this->with4get)->find($id);
            if (!$jpa) throw new Exception('El pedido que buscas no existe');
            $hairGoals = Formula::whereIn('id', $jpa->formula->hair_goals)->get();
            $jpa->formula->hair_goals_list = $hairGoals;
            return $jpa;
        });
        return \response($response->toArray(), $response->status);
    }

    public function setReactViewProperties(Request $request)
    {
        $statusesJpa = Status::select()
            ->where('status', true)
            ->where('visible', true)
            ->get();
        return [
            'statuses' => $statusesJpa
        ];
    }

    public function setPaginationInstance(string $model)
    {
        $model::where('created_at', '<=', now()->subDays(1))
            ->where('status_id', 'f13fa605-72dd-4729-beaa-ee14c9bbc47b')
            ->update([
                'status_id' => 'c063efb2-1e9b-4a43-8991-b444c14d30dd'
            ]);

        $model::where('updated_at', '<=', now()->subDays(3))
            ->where('status_id', 'ad509181-6701-4fa1-a990-6bcb103254af')
            ->update([
                'status_id' => 'bc012ef5-96e8-4bbb-867b-061c4090d9d2'
            ]);

        return $model::select('sales.*')
            ->with(['status'])
            ->join('statuses AS status', 'status.id', 'sales.status_id');
    }

    public function afterSave(Request $request, object $jpa, bool $isNew)
    {
        $newJpa = Sale::with($this->with4get)->find($jpa->id);
        return $newJpa;
    }

    public function delete(Request $request, string $id)
    {
        $response = Response::simpleTryCatch(function () use ($request, $id) {
            $deleted =  $this->model::where('id', $id)
                ->update(['status_id' => 'c063efb2-1e9b-4a43-8991-b444c14d30dd']);

            if (!$deleted) throw new Exception('No se ha eliminado ningun registro');
        });
        return response(
            $response->toArray(),
            $response->status
        );
    }
}
