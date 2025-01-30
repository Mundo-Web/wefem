<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();

        return view('pages.marcas.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);


        $brand = new Brand();


        if ($request->hasFile("logo")) {
            $file = $request->file('logo');
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
            $ruta = 'storage/images/marcas/';

            // Mover el archivo directamente sin procesarlo
            $file->move($ruta, $nombreImagen);

            $brand->logo = $ruta . $nombreImagen;
        }

        $brand->nombre = $request->nombre;

        $brand->descripcion = $request->descripcion;


        $brand->save();

        return redirect()->route('marcas.index')->with('success', 'Marca creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand, $id)
    {
        $brand = Brand::findOrfail($id);

        return view('pages.marcas.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::findOrfail($id);
        $brand->nombre = $request->nombre;
        $brand->descripcion = $request->descripcion;

        // Si el usuario sube un nuevo icono
        if ($request->hasFile("logo")) {
            // Elimina el archivo anterior si existe
            if (File::exists(public_path($brand->logo))) {
                File::delete(public_path($brand->logo));
            }
            // Obtiene el nuevo archivo
            $file = $request->file('logo');
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
            $ruta = 'storage/images/marcas/';

            // Mueve el archivo a la carpeta deseada
            $file->move(public_path($ruta), $nombreImagen);

            // Actualiza el campo icono con la nueva ruta
            $brand->logo = $ruta . $nombreImagen;
        }

        $brand->update();

        return redirect()->route('marcas.index')->with('success', 'Marca actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
    public function deleteBrand(Request $request)
    {
        $id = $request->id;

        $brand = Brand::findOrfail($id);
        // Elimina el archivo anterior si existe
        if (File::exists(public_path($brand->logo))) {
            File::delete(public_path($brand->logo));
        }


        $brand->forceDelete();

        return response()->json(['message' => 'Marca eliminada']);
    }

    public function updateVisible(Request $request)
    {
        $id = $request->id;

        $visible = $request->visible;

        $brand = Brand::findOrFail($id);

        $brand->visible = $visible;

        $brand->save();



        return response()->json(['message' => 'Marca modificada']);
    }
}
