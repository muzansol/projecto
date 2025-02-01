<?php

namespace App\Http\Controllers;
use App\Models\Poco;
use App\Models\RecolhaPoco;
use App\Models\Sector;
use App\Models\User;
use Illuminate\Http\Request;

class RecolhaPocoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recolhaPocos = RecolhaPoco::orderByDesc('id')->get();
        $users = User::orderByDesc('id')->get();
        $pocos = Poco::orderByDesc('id')->get(); 
        
        // Carregar a VIEW
        return view('recolha_poco.index', ['recolhaPocos' => $recolhaPocos,'users' => $users, 'pocos' => $pocos]);
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
        $profissional = $request->all();
         //dd($profissional);
         $profissional = RecolhaPoco::create( $profissional);
         return redirect()->back()->with('success','Profissional de saúde cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(RecolhaPoco $recolhaPoco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecolhaPoco $recolhaPoco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RecolhaPoco $recolhaPoco)
    {
        $update = RecolhaPoco::findOrFail($request->id)->update($request->all());
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
        $especialidade = RecolhaPoco::find($id);
        $especialidade->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
