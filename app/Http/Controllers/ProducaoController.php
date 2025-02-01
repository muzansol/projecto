<?php

namespace App\Http\Controllers;

use App\Models\Bloco;
use App\Models\Producao;
use Illuminate\Http\Request;

class ProducaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // Recuperar os registros do banco dados
        $producaos = Producao::orderByDesc('id')->get();
        $blocos = Bloco::orderByDesc('id')->get();

        // Carregar a VIEW
        return view('producao.index', ['producao' => $producao,'blocos'=>$blocos]);
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
    public function show(Producao $producao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producao $producao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producao $producao)
    {
        $update = Producao::findOrFail($request->id)->update($request->all());
        if($update){
            return redirect()->back()->with('success','Registro editado com Sucesso');
         }else{
            return redirect()->back()->with('error','Erro!');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producao $producao)
    {
        $producao = Producao::find($id);
        $producao->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
