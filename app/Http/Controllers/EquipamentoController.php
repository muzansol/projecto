<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Categoria;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    
    public function index()
    {
        $equipamentos = Equipamento::orderByDesc('id')->get();
        $categorias = Categoria::orderByDesc('id')->get();
        return view('equipamentos.index', ['equipamentos' => $equipamentos, 'categorias' => $categorias]);
    }

    public function store(Request $request)
    {
        $equipamento = $request->all();
         $equipamento = Equipamento::create( $equipamento);
         return redirect()->back()->with('success','Equipamento cadastrado com sucesso');

    }

    public function show(Equipamento $equipamentos)
    {
        return view('equipamentos.show');
    }

    public function update(Request $request, Equipamento $equipamentos)
    {
        $update = Equipamento::findOrFail($request->id)->update($request->all());
        if($update){
            return redirect()->back()->with('success','Equipamento editado com Sucesso');
         }else{
            return redirect()->back()->with('error','Erro!');
         }
    }

    public function destroy($id)
    {
        $equipamento = Equipamento::find($id);
        $equipamento->delete();
        return redirect()->back()->with('success','Equipamento eliminado com Sucesso');
    }
}
