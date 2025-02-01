<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $especialidades = Especialidade::orderByDesc('id')->get();
        return view('especialidades.index', ['especialidades' => $especialidades]);
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profissional = $request->all();
         $profissional = Especialidade::create( $profissional);
         return redirect()->back()->with('success','Profissional de saúde cadastrado com sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(Especialidade $especialidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string|int $id)
    {
        $update = Especialidade::findOrFail($request->id)->update($request->all());
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
        $especialidade = Especialidade::find($id);
        $especialidade->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
