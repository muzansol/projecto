<?php

namespace App\Http\Controllers;

use App\Models\Paragem;
use App\Models\Tipo_paralizacao;
use App\Models\Equipamento;
use Illuminate\Http\Request;

class ParagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paragens = Paragem::orderByDesc('id')->get();
        $tipo_paralizacoes = Tipo_paralizacao::orderByDesc('id')->get();
        $equipamentos = Equipamento::orderByDesc('id')->get();
        return view('paragem.index', ['paragens' => $paragens, 'equipamentos' => $equipamentos, 'tipo_paralizacoes' => $tipo_paralizacoes]);
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
        $paragens = $request->all();
        $paragens = Paragem::create($paragens);
         return redirect()->back()->with('success','Registro cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paragem $paragem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paragem $paragem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paragem $paragem)
    {
        $update = Paragem::findOrFail($request->id)->update($request->all());
        if($update){
            return redirect()->back()->with('success','Registro editado com Sucesso');
         }else{
            return redirect()->back()->with('error','Erro!');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paragem $paragem)
    {
        $paragens = Paragem::find($id);
        $paragens->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
