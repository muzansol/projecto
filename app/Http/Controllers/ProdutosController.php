<?php

namespace App\Http\Controllers;
use App\Models\TipoProduto;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produtos::orderByDesc('id')->get();
        $tipoproduto = TipoProduto::orderByDesc('id')->get();

        // Carregar a VIEW
        return view( 'Produtos.index', ['Produtos' =>  $produtos,'tipoproduto'=> $tipoproduto]);
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
        $producao = $request->all();
        // dd($profissional);
         $producao = Producao::create( $producao);
         return redirect()->back()->with('success','Produção cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produtos $produtos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produtos $produtos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produtos $produtos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produtos $produtos)
    {
        //
    }
}
