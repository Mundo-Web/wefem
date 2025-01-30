<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = CategoryPost::all();

        return view('pages.categoriesPost.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categoriesPost.create');
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


        $category = new CategoryPost();

        $category->nombre = $request->nombre;
        $category->slug = Str::slug($request->nombre);
        $category->descripcion = $request->descripcion;
        $category->save();

        return redirect()->route('categoriasPost.index')->with('success', 'Categoria creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryPost $categoryPost, $id)
    {
        $category = CategoryPost::findOrfail($id);

        return view('pages.categoriesPost.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categoria = CategoryPost::findOrfail($id);
        $categoria->nombre = $request->nombre;
        $categoria->slug = Str::slug($request->nombre);
        $categoria->descripcion = $request->descripcion;
        $categoria->update();

        return redirect()->route('categoriasPost.index')->with('success', 'Categoria actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryPost $categoryPost)
    {
        //
    }
    public function deleteCategory(Request $request)
    {
        $id = $request->id;

        $category = CategoryPost::findOrfail($id);

        $category->delete();

        return response()->json(['message' => 'Categoría eliminada']);
    }
}
