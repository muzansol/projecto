<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use App\Models\Bloco;
use Illuminate\Http\Request;

class PlanoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Recuperar os registros do banco dados
         $planos = Plano::orderByDesc('id')->get();
         $blocos = Bloco::orderByDesc('id')->get();
  
          // Carregar a VIEW
          return view('plano.index', ['planos' => $planos, "blocos" => $blocos]);
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
        $planos = $request->all();
        // dd($profissional);
         $planos = Plano::create($planos);
         return redirect()->back()->with('success','Plano cadastrado com sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(Plano $plano)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plano $plano)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plano $plano)
    {
        $update = Plano::findOrFail($request->id)->update($request->all());
        if($update){
            return redirect()->back()->with('success','Registro editado com Sucesso');
         }else{
            return redirect()->back()->with('error','Erro!');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plano = Plano::find($id);
        $plano->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
