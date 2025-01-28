<?php

namespace App\Http\Controllers;

use App\Models\HomeView;
use App\Http\Requests\StoreHomeViewRequest;
use App\Http\Requests\UpdateHomeViewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class HomeViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreHomeViewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeView $homeView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeView $homeView)
    {
        $homeview = HomeView::first();
        if (!$homeview) {
            $homeview = HomeView::create();
        }
        return view('pages.homeview.edit', compact('homeview'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $homeview = HomeView::findOrfail($id);
        $homeview->update($request->all());
        $homeview->save();
        return back()->with('success', 'Registro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeView $homeView)
    {
        //
    }
}
