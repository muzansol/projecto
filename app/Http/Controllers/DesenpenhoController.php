<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Desenpenho;
use App\Models\Equipamento;
use App\Models\Tipo_trabalho;
use Illuminate\Http\Request;

class DesenpenhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desenpenhos = Desenpenho::orderByDesc('id')->get();
        $users = User::orderByDesc('id')->get();
        $equipamentos = Equipamento::orderByDesc('id')->get();
        $trabalhos = Tipo_trabalho::orderByDesc('id')->get();
        return view('desenpenho.index', ['desenpenhos' => $desenpenhos, 'equipamentos' => $equipamentos, 'trabalhos' => $trabalhos, 'users' => $users]);
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
        $desenpenhos = $request->all();
         $desenpenhos = Desenpenho::create($desenpenhos);
         return redirect()->back()->with('success','Registro cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Desenpenho $desenpenho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desenpenho $desenpenho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Desenpenho $desenpenho)
    {
        $update = Desenpenho::findOrFail($request->id)->update($request->all());
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
        $desenpenho = Desenpenho::find($id);
        $desenpenho->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
