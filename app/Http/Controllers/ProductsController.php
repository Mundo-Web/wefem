<?php

namespace App\Http\Controllers;

use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products =  Products::where("status", "=", true)->get();

    return view('pages.products.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $atributos = Attributes::where("status", "=", true)->get();
    $valorAtributo = AttributesValues::where("status", "=", true)->get();
    return view('pages.products.create', compact('atributos', 'valorAtributo'));
  }

  public function saveImg($file, $route, $nombreImagen)
  {
    $manager = new ImageManager(new Driver());
    $img =  $manager->read($file);


    if (!file_exists($route)) {
      mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
    }

    $img->save($route . $nombreImagen);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $data = $request->all();
    $atributos = null;

    $request->validate([
      'producto' => 'required',
    ]);

    if ($request->hasFile("imagen")) {
      $file = $request->file('imagen');
      $routeImg = 'storage/images/imagen/';
      $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

      $this->saveImg($file, $routeImg, $nombreImagen);

      $data['imagen'] = $routeImg . $nombreImagen;
      // $AboutUs->name_image = $nombreImagen;
    }

    foreach ($request->all() as $key => $value) {

      if (strstr($key, ':')) {
        // Separa el nombre del atributo y su valor
        $parts = explode(':', $key);
        $nombre = strtolower($parts[0]); // Nombre del atributo
        $valor = strtolower($parts[1]); // Valor del atributo en minúsculas

        // Verifica si el atributo ya existe en el array
        if (isset($atributos[$nombre])) {
          // Si el atributo ya existe, agrega el nuevo valor a su lista
          $atributos[$nombre][] = $valor;
        } else {
          // Si el atributo no existe, crea una nueva lista con el valor
          $atributos[$nombre] = [$valor];
        }
        unset($request[$key]);
      }
    }
    
    $jsonAtributos = json_encode($atributos);
    
    if(strtolower($data['destacar']) == 'on') $data['destacar'] = 0 ;
    if(strtolower($data['recomendar'] )== 'on') $data['recomendar'] = 0 ;

    $data['atributes'] = $jsonAtributos;
    $cleanedData = Arr::where($data, function ($value, $key) {
      return !is_null($value);
    });
    dump($cleanedData);

    Products::create($cleanedData);

    return redirect()->route('products.index')->with('success', 'Publicación creado exitosamente.');

  }

  /**
   * Display the specified resource.
   */
  public function show(Products $products)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Products $products)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Products $products)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Products $products)
  {
    //
  }

  public function updateVisible(Request $request)
  {
    dump($request->all());
    $id = $request->id;
        $field = $request->field;
        $status = $request->status;

        // Verificar si el producto existe
        $product = Products::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        // Actualizar el campo dinámicamente
        $product->update([
            $field => $status
        ]);
    return response()->json(['message' => 'registro actualizado']);

  }
}
