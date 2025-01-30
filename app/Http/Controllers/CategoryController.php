<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Microcategory;
use App\Models\Products;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::where('visible', true)->orderBy('id', 'asc')->get();

        return view('pages.categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categories.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);


        $category = new Category();


        if ($request->hasFile("imagen")) {
            $file = $request->file('imagen');
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
            $ruta = 'storage/images/categorias/';

            // Mover el archivo directamente sin procesarlo
            $file->move($ruta, $nombreImagen);

            $category->imagen = $ruta . $nombreImagen;
        }

        $category->name = $request->name;

        $category->description = $request->description;


        $category->save();

        return redirect()->route('categorias.index')->with('success', 'Categoria creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $id)
    {
        $category = Category::findOrfail($id);

        return view('pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categoria = Category::findOrfail($id);
        $categoria->name = $request->name;
        $categoria->description = $request->description;

        // Si el usuario sube un nuevo icono
        if ($request->hasFile("imagen")) {
            // Elimina el archivo anterior si existe
            if (File::exists(public_path($categoria->imagen))) {
                File::delete(public_path($categoria->imagen));
            }
            // Obtiene el nuevo archivo
            $file = $request->file('imagen');
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
            $ruta = 'storage/images/categorias/';

            // Mueve el archivo a la carpeta deseada
            $file->move(public_path($ruta), $nombreImagen);

            // Actualiza el campo icono con la nueva ruta
            $categoria->imagen = $ruta . $nombreImagen;
        }

        $categoria->update();

        return redirect()->route('categorias.index')->with('success', 'Categoria actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }

    public function deleteCategory(Request $request)
    {
        $id = $request->id;

        $category = Category::findOrfail($id);
        // Elimina el archivo anterior si existe
        if (File::exists(public_path($category->imagen))) {
            File::delete(public_path($category->imagen));
        }


        $category->delete();

        return response()->json(['message' => 'Categoría eliminada']);
    }

    public function updateVisible(Request $request)
    {
        $id = $request->id;

        $visible = $request->visible;

        $category = Category::findOrFail($id);

        $category->visible = $visible;

        $category->save();



        return response()->json(['message' => 'Categoría modificada']);
    }
}
