<?php

namespace App\Http\Controllers;

use App\Models\Tipo_trabalho;
use Illuminate\Http\Request;

class TipoTrabalhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipoTrabalhos = Tipo_trabalho::orderByDesc('id')->get();
        return view('tipo_trabalho.index', ['tipoTrabalhos' => $tipoTrabalhos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipo_trabalho.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipoTrabalhos = $request->all();
        $tipoTrabalhos = Tipo_trabalho::create($tipoTrabalhos);
        return redirect()->back()->with('success','Código de trabalho cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo_trabalho $tipo_trabalho)
    {
        return view('tipo_trabalho.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipo_trabalho $tipo_trabalho)
    {
        return view('tipo_trabalho.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipo_trabalho $tipo_trabalho)
    {
        $update = Tipo_trabalho::findOrFail($request->id)->update($request->all());
        if($update){
            return redirect()->back()->with('success','Registro editado com Sucesso');
         }else{
            return redirect()->back()->with('error','Erro!');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipo_trabalho $tipo_trabalho)
    {
        return view('tipo_trabalho.delete');
    }
}
