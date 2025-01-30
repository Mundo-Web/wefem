<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\AlbumImage;
use App\Models\Attributes;
use App\Models\AttributesValues;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Combinacion;
use App\Models\Galerie;
use App\Models\ImagenProducto;
use App\Models\Microcategory;
use App\Models\Products;
use App\Models\Specifications;
use App\Models\Subcategory;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use SoDe\Extend\File as ExtendFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProductsController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {



    $products =  Products::where("status", "=", true)->get(); //quiero tambien que obtenga a que categoria pertenece

    return view('pages.products.index', compact('products'));
  }


  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $marcas = Brand::all();


    $categorias = Category::all();


    return view('pages.products.create', compact('categorias', 'marcas'));
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


    $request->validate([
      'producto' => 'required|string|max:255',
      'extract' => 'nullable|string|max:255',
      'description' => 'nullable|string',
      'precio' => 'nullable|numeric|min:0',
      'stock' => 'nullable|numeric|min:0',
      'categoria_id' => 'required|exists:categories,id',
      'brand_id' => 'required|exists:brands,id',
      'especificaciones' => 'nullable|string',
      'destacado' => 'nullable|boolean',
      'visible' => 'nullable|boolean',
      'status' => 'nullable|boolean',
    ]);

    $data = $request->all();

    try {
      // **Paso 1: Crear la carpeta principal "Productos" si no existe**
      $mainFolder = 'Productos';
      $pathMainFolder = public_path('storage/images/albums/' . $mainFolder);
      if (!is_dir($pathMainFolder)) {
        mkdir($pathMainFolder, 0777, true);
      }

      // **Paso 2: Crear la subcarpeta con el nombre del producto**
      $subFolder = ucfirst(strtolower($request->producto)); // Convertimos el nombre para evitar errores
      $pathSubFolder = $pathMainFolder . '/' . $subFolder;
      if (!is_dir($pathSubFolder)) {
        mkdir($pathSubFolder, 0777, true);
      }

      // **Paso 3: Crear el álbum del producto**
      $productosAlbum = Album::firstOrCreate([
        'name' => 'Productos',
      ], [
        'description' => 'Contenedor principal para los Productos.',
      ]);

      $album = Album::updateOrCreate([
        'name' => $subFolder,
      ], [
        'parent_id' => $productosAlbum->id,
      ]);

      // **Paso 4: Manejo de la imagen, ahora guardada en la carpeta del producto**
      if ($request->hasFile("imagen")) {
        $file = $request->file('imagen');
        $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
        $file->move($pathSubFolder, $nombreImagen);
        $data['imagen'] = 'storage/images/albums/' . $mainFolder . '/' . $subFolder . '/' . $nombreImagen;
      } else {
        $data['imagen'] = 'images/img/noimagen.jpg';
      }

      // **Paso 5: Manejo de manuales**
      if ($request->hasFile("manuales")) {
        $file = $request->file('manuales');
        $routearchive = 'storage/archivos/productos/';
        $nombrearchive = Str::random(10) . '_' . $file->getClientOriginalName();

        if (!file_exists($routearchive)) {
          mkdir($routearchive, 0777, true);
        }

        $file->move($routearchive, $nombrearchive);
        $data['manuales'] = $routearchive . $nombrearchive;
      }

      // **Paso 6: Guardar el producto en la base de datos**
      $producto = new Products();
      $producto->producto = $request->producto;
      $producto->extract = $request->extract;
      $producto->description = $request->description;
      $producto->precio = $request->precio;
      $producto->stock = $request->stock;
      $producto->especificaciones = $request->especificaciones;
      $producto->categoria_id = $request->categoria_id;
      $producto->brand_id = $request->brand_id;
      $producto->destacado = $request->has('destacado');

      $producto->album = 'storage/images/albums/' . $mainFolder . '/' . $subFolder; // Guardar ruta en el campo album
      $producto->imagen = $data['imagen'] ?? null;
      $producto->manuales = $data['manuales'] ?? null;

      $producto->save();

      return redirect()->route('products.index')->with('success', 'Publicación creada exitosamente.');
    } catch (ValidationException $e) {
      return redirect()->back()->withErrors($e->validator)->withInput();
    } catch (\Throwable $th) {
      return redirect()->route('products.create')->with('error', 'Llenar campos obligatorios');
    }
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
  public function edit(string $id)
  {

    $producto =  Products::findOrFail($id);
    $marcas = Brand::all();
    $categorias = Category::all();
    // Extraer solo el nombre del producto desde la ruta en "album"
    $albumPath = $producto->album; // Ejemplo: "storage/images/albums/Productos/MiProducto"
    $albumParts = explode('/', $albumPath);
    $albumName = end($albumParts); // Obtiene "MiProducto"
    // Buscar el álbum en la base de datos
    $album = Album::where('name', $albumName)->withCount('images', 'children')->first();
    $album->load('children', 'images');
    return view('pages.products.edit', compact('producto', 'categorias',  'marcas', 'album'));
  }

  /**
   * Update the specified resource in storage.
   */
  private function updateAlbumAndFolder($oldTitle, $newTitle)
  {
    // Actualizar el título del álbum en la base de datos
    $album = Album::where('name', $oldTitle)->first();
    if ($album) {
      $album->name = $newTitle;
      $album->save();
    }
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'producto' => 'required|string|max:255',
      'extract' => 'nullable|string|max:255',
      'description' => 'nullable|string',
      'precio' => 'nullable|numeric|min:0',
      'stock' => 'nullable|numeric|min:0',
      'categoria_id' => 'required|exists:categories,id',
      'brand_id' => 'required|exists:brands,id',
      'especificaciones' => 'nullable|string',
      //'destacado' => 'nullable|boolean',
      //'visible' => 'nullable|boolean',
      //'status' => 'nullable|boolean',
    ]);
    $producto = Products::findOrFail($id);
    // Guardar el título anterior para actualizar el álbum y la carpeta
    $oldTitle = $producto->producto;

    // Verificar si ya existe un producto con el mismo nombre (excluyendo el producto actual)
    $existingProduct = Products::where('producto', $request->producto)->where('id', '!=', $id)->first();
    if ($existingProduct) {
      return redirect()->back()
        ->withInput()
        ->with('error', 'Ya existe un producto con ese nombre.');
    }
    try {
      $data = $request->all();


      // **Paso 1: Obtener la carpeta actual del producto**
      $mainFolder = 'Productos';
      $subFolder = $oldTitle;
      $pathSubFolder = public_path("storage/images/albums/{$mainFolder}/{$subFolder}");

      if (!is_dir($pathSubFolder)) {
        mkdir($pathSubFolder, 0777, true);
      }

      // **Paso 2: Actualizar el álbum**
      $productosAlbum = Album::firstOrCreate([
        'name' => 'Productos',
      ], [
        'description' => 'Contenedor principal para los Productos.',
      ]);

      $album = Album::updateOrCreate(
        ['name' => $subFolder],
        ['parent_id' => $productosAlbum->id]
      );

      // **Paso 3: Manejo de la imagen**
      if ($request->hasFile("imagen")) {
        // Eliminar la imagen anterior si existe
        if ($producto->imagen && file_exists(public_path($producto->imagen))) {
          unlink(public_path($producto->imagen));
        }

        $file = $request->file('imagen');
        $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
        $file->move($pathSubFolder, $nombreImagen);
        $data['imagen'] = "storage/images/albums/{$mainFolder}/{$subFolder}/{$nombreImagen}";
      }

      // **Paso 4: Manejo de manuales**
      if ($request->hasFile("manuales")) {
        // Eliminar manual anterior si existe
        if ($producto->manuales && file_exists(public_path($producto->manuales))) {
          unlink(public_path($producto->manuales));
        }

        $file = $request->file('manuales');
        $routearchive = 'storage/archivos/productos/';
        $nombrearchive = Str::random(10) . '_' . $file->getClientOriginalName();

        if (!is_dir(public_path($routearchive))) {
          mkdir(public_path($routearchive), 0777, true);
        }

        $file->move(public_path($routearchive), $nombrearchive);
        $data['manuales'] = $routearchive . $nombrearchive;
      }

      // **Paso 5: Actualizar el producto en la base de datos**
      $producto->update([
        'producto' => $request->producto,
        'extract' => $request->extract,
        'description' => $request->description,
        'precio' => $request->precio,
        'stock' => $request->stock,
        'especificaciones' => $request->especificaciones,
        'categoria_id' => $request->categoria_id,
        'brand_id' => $request->brand_id,
        'destacado' => $request->has('destacado'),
        'album' => "storage/images/albums/{$mainFolder}/{$request->producto}",
        'imagen' => $data['imagen'] ?? $producto->imagen,
        'manuales' => $data['manuales'] ?? $producto->manuales,
      ]);
      // Actualizar el álbum y la carpeta en el sistema de archivos
      $this->updateAlbumAndFolder($oldTitle, $request->producto);

      return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente.');
    } catch (ValidationException $e) {
      return redirect()->back()->withErrors($e->validator)->withInput();
    } catch (\Throwable $th) {
      return redirect()->route('products.edit', $id)->with('error', 'Error al actualizar el producto.');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function borrar(Request $request)
  {
    //softdelete
    DB::delete('delete from galeries where product_id = ?', [$request->id]);

    $product = Products::find($request->id);
    $product->status = 0;
    $product->save();
  }

  public function updateVisible(Request $request)
  {

    // $cantidad = $this->contardestacados();

    // if($cantidad >= 1 && $request->status == 1){
    //     return response()->json(['message' => 'Solo puedes destacar un producto'], 409 );
    // }

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

  public function uploadImages(Request $request, Album $album)
  {
    $request->validate([
      'images.*' => 'required|image|mimes:png,jpg|max:2048',
    ]);

    if ($request->hasFile('images')) {
      $manager = new ImageManager(new Driver());

      foreach ($request->file('images') as $file) {
        $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
        $img = $manager->read($file);
        $ruta = 'storage/images/albums/Productos/' . $album->name . '/';

        if (!is_dir(public_path($ruta))) {
          mkdir(public_path($ruta), 0777, true);
        }

        $img->save(public_path($ruta . $nombreImagen));

        $album->images()->create([
          'url_image' => $ruta . $nombreImagen,
          'name_image' => $nombreImagen,
        ]);
      }

      $album = Album::findOrFail($album->id);
      $album->load('images');

      return response()->json([
        'success' => true,
        'message' => 'Imágenes cargadas exitosamente.',
        'album' => $album,
      ]);
    }

    return response()->json([
      'error' => true,
      'message' => 'No se pudo subir las imágenes.',
    ]);
  }

  public function destroyImage(AlbumImage $image)
  {
    try {
      if ($image->url_image && file_exists($image->url_image)) {
        unlink($image->url_image);
      }

      $image->delete();

      return response()->json([
        'success' => true,
        'message' => 'Imagen eliminada correctamente.'
      ]);
    } catch (\Exception $e) {
      return response()->json([
        'success' => false,
        'message' => 'Ocurrió un problema al eliminar la imagen.'
      ], 500);
    }
  }
}
