<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\ClientLogos;
use App\Models\General;
use App\Models\Service;
use Illuminate\Http\Request;

//use Intervention\Image\Facades\Image;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
//use Illuminate\Support\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;



class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $servicios = Service::all();

        return view('pages.service.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            //'icono' => 'required|file|mimes:svg', // Aceptar solo SVG, con un tamaño máximo de 2 MB
            'descripcion_breve' => 'required|string',
            'beneficios' => 'required|string',
            'descripcion_extensa' => 'required|string',

        ]);

        //tamaño imagenes 808x445 
        $service = new Service();


        if ($request->hasFile("icono")) {
            $file = $request->file('icono');
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
            $ruta = 'storage/images/servicios/';

            // Mover el archivo directamente sin procesarlo
            $file->move($ruta, $nombreImagen);

            $service->icono = $ruta . $nombreImagen;
        }

        $service->title = $request->title;
        $service->subtitle = $request->subtitle;
        $service->beneficios = $request->beneficios;
        $service->descripcion_breve = $request->descripcion_breve;
        $service->descripcion_extensa = $request->descripcion_extensa;

        $service->save();

        return redirect()->route('servicios.index')->with('success', 'Servicio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service, $id)
    {

        $servicios = Service::find($id);

        return view('pages.service.edit', compact('servicios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $service = Service::findOrfail($id);
        $service->title = $request->title;
        $service->subtitle = $request->subtitle;
        $service->beneficios = $request->beneficios;
        $service->descripcion_breve = $request->descripcion_breve;
        $service->descripcion_extensa = $request->descripcion_extensa;


        // Si el usuario sube un nuevo icono
        if ($request->hasFile("icono")) {
            // Elimina el archivo anterior si existe
            if (File::exists(public_path($service->icono))) {
                File::delete(public_path($service->icono));
            }

            // Obtiene el nuevo archivo
            $file = $request->file('icono');
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
            $ruta = 'storage/images/servicios/';

            // Mueve el archivo a la carpeta deseada
            $file->move(public_path($ruta), $nombreImagen);

            // Actualiza el campo icono con la nueva ruta
            $service->icono = $ruta . $nombreImagen;
        }



        $service->update();

        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::findOrfail($id);



        $service->status = false;


        $service->save();

        // $service = update(['status' => false]);
        // $ruta = storage_path() .'/app/public/images/servicios/'. $service->name_image; 

        // if(File::exists($ruta))
        // {
        //     File::delete($ruta);
        // }

        // $service->delete();    
        // return redirect()->route('servicios.index')->with('success', 'Servicio eliminado exitosamente.');
    }


    public function deleteService(Request $request)
    {
        //Recupero el id mandado mediante ajax
        $id = $request->id;
        //Busco el servicio con id como parametro
        $service = Service::findOrfail($id);

        $service->delete();

        // Devuelvo una respuesta JSON u otra respuesta según necesites
        return response()->json(['message' => 'Servicio eliminado.']);
    }



    public function updateVisible(Request $request)
    {
        $id = $request->id;
        $visible = $request->visible;

        // Encontrar el servicio
        $service = Service::findOrFail($id);

        // Actualizar la visibilidad
        $service->visible = $visible;
        $service->save();

        // Obtener el título del servicio para enviar en la respuesta
        $titleService = $service->title;

        // Retornar la respuesta JSON con el mensaje y el título del servicio
        return response()->json([
            'message' =>
            $service->visible == 1 ? 'Servicio Visible.' : 'Servicio No Visible.',
            'titleService' => $titleService
        ]);
    }
}
