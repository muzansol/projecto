<?php

namespace App\Http\Controllers;

use App\Models\Tipo_paralizacao;
use Illuminate\Http\Request;

class TipoParalizacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipoParalizacoes = Tipo_paralizacao::orderByDesc('id')->get();
        return view('tipo_paralizacao.index', ['tipoParalizacoes' => $tipoParalizacoes]);
    }

    public function store(Request $request)
    {
        $tipoParalizacao = $request->all();
        $tipoParalizacao = Tipo_paralizacao::create($tipoParalizacao);
        return redirect()->back()->with('success','Código de trabalho cadastrado com sucesso');
    }

    public function show(Tipo_paralizacao $tipo_paralizacao)
    {
        return view('tipo_paralizacao.show');
    }

    public function edit(Tipo_paralizacao $tipo_paralizacao)
    {
        return view('tipo_paralizacao.edit');
    }

    public function update(Request $request, Tipo_paralizacao $tipo_paralizacao)
    {
        $update = Tipo_paralizacao::findOrFail($request->id)->update($request->all());
        if($update){
            return redirect()->back()->with('success','Registro editado com Sucesso');
         }else{
            return redirect()->back()->with('error','Erro!');
         }
    }

    public function destroy($id)
    {
        $tipoParalizacao = Tipo_paralizacao::find($id);
        $tipoParalizacao->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
