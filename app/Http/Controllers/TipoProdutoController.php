<?php

namespace App\Http\Controllers;

use App\Models\TipoProduto;
use Illuminate\Http\Request;

class TipoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TipoProduto = Producao::orderByDesc('id')->get();
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
    public function store(Request $request)
    {
        $TipoProduto = $request->all();
        // dd($profissional);
         $TipoProduto = Tipoproduto::create( $TipoProduto);
         return redirect()->back()->with('success','Tipo produto cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoProduto $tipoProduto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoProduto $tipoProduto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoProduto $tipoProduto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoProduto $tipoProduto)
    {
        $producao = Tipoproduto::find($id);
        $producao->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
