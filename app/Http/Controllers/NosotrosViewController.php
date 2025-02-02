<?php

namespace App\Http\Controllers;

use App\Models\NosotrosView;
use App\Http\Requests\StoreNosotrosViewRequest;
use App\Http\Requests\UpdateNosotrosViewRequest;
use App\Models\AboutUs;
use App\Models\General;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class NosotrosViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUs = AboutUs::first();

        return view('pages.aboutus.edit', compact('nosotros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNosotrosViewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NosotrosView $nosotrosView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $nosotrosView)
    {
        $nosotros = AboutUs::first();

        return view('pages.nosotrosview.edit', compact('nosotros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function saveImg($file, $route, $nombreImagen)
    {
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file);

        // Crear el directorio si no existe
        if (!file_exists($route)) {
            mkdir($route, 0777, true);
        }

        // Guardar la imagen en la ruta especificada
        $img->save($route . $nombreImagen);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'breve_historia' => 'required|string',
            'mision' => 'required|string',
            'vision' => 'required|string',
            'sello_garantia_titulo' => 'required|string',
            'sello_garantia_subtitulo' => 'required|string',
            'sello_garantia_contenido' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen_vision_mision' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen_sello_garantia' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'imagen.image' => 'El archivo debe ser una imagen',
            'imagen.mimes' => 'El archivo debe ser de tipo: jpeg, png, jpg, gif, svg',
            'imagen.max' => 'El tamaño máximo del archivo es de 2MB',
            'imagen_vision_mision.image' => 'El archivo debe ser una imagen',
            'imagen_vision_mision.mimes' => 'El archivo debe ser de tipo: jpeg, png, jpg, gif, svg',
            'imagen_vision_mision.max' => 'El tamaño máximo del archivo es de 2MB',
            'imagen_sello_garantia.image' => 'El archivo debe ser una imagen',
            'imagen_sello_garantia.mimes' => 'El archivo debe ser de tipo: jpeg, png, jpg, gif, svg',
            'imagen_sello_garantia.max' => 'El tamaño máximo del archivo es de 2MB',
        ]);
        try {

            // Buscar el registro a actualizar
            $nosotros = AboutUs::findOrFail($id);

            // Procesar la imagen principal
            if ($request->hasFile("imagen")) {
                $file = $request->file('imagen');
                $routeImg = 'storage/images/nosotroshome/'; // Ruta relativa
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                // Guardar la imagen en el servidor
                $this->saveImg($file, public_path($routeImg), $nombreImagen);
                if ($nosotros->imagen && file_exists($nosotros->imagen)) {
                    unlink($nosotros->imagen);
                }
                // Guardar la ruta relativa en la base de datos
                $nosotros->imagen = $routeImg . $nombreImagen;
            }

            // Procesar la imagen de visión y misión
            if ($request->hasFile("imagen_vision_mision")) {
                $file = $request->file('imagen_vision_mision');
                $routeImg = 'storage/images/nosotroshome/'; // Ruta relativa
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                // Guardar la imagen en el servidor
                $this->saveImg($file, public_path($routeImg), $nombreImagen);
                if ($nosotros->imagen_vision_mision && file_exists($nosotros->imagen_vision_mision)) {
                    unlink($nosotros->imagen_vision_mision);
                }
                // Guardar la ruta relativa en la base de datos
                $nosotros->imagen_vision_mision = $routeImg . $nombreImagen;
            }

            // Procesar la imagen del sello de garantía
            if ($request->hasFile("imagen_sello_garantia")) {
                $file = $request->file('imagen_sello_garantia');
                $routeImg = 'storage/images/nosotroshome/'; // Ruta relativa
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                // Guardar la imagen en el servidor
                $this->saveImg($file, public_path($routeImg), $nombreImagen);
                if ($nosotros->imagen_sello_garantia && file_exists($nosotros->imagen_sello_garantia)) {
                    unlink($nosotros->imagen_sello_garantia);
                }
                // Guardar la ruta relativa en la base de datos
                $nosotros->imagen_sello_garantia = $routeImg . $nombreImagen;
            }

            // Actualizar el registro con los datos del request, excluyendo campos no deseados
            $nosotros->update($request->except([
                '_token',
                '_method',
                'imagen',
                'imagen_vision_mision',
                'imagen_sello_garantia',
            ]));

            // Redireccionar con un mensaje de éxito
            return back()->with('success', 'Página actualizada correctamente');
        } catch (\Exception $e) {
            // Capturar cualquier excepción y redireccionar con un mensaje de error
            return back()->with('error', 'Error al actualizar la página: ' . $e->getMessage());
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NosotrosView $nosotrosView)
    {
        //
    }
}
