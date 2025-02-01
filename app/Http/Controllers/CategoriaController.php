<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderByDesc('id')->get();
        return view('categoria.index', ['categorias' => $categorias]);
    }

    public function store(Request $request)
    {

        $categoria = $request->all();
         $categoria = Categoria::create( $categoria);
         return redirect()->back()->with('success','Categoria cadastrado com sucesso');


    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        //
        return view('categoria.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        //
        return view('categoria.delete');
    }
}
