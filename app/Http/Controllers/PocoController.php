<?php

namespace App\Http\Controllers;
use App\Models\Sector;
use App\Models\Poco;
use Illuminate\Http\Request;

class PocoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Recuperar os registros do banco dados
         $pocos = Poco::orderByDesc('id')->get();
         $sectors = Sector::orderByDesc('id')->get();
         return view('poco.index', ['pocos' => $pocos,'sectors' => $sectors]);
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
         dd($request);
         $profissional = Poco::create( $profissional);
         return redirect()->back()->with('success','Poço cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show($Poco )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poco $poco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poco $poco)
    {
        $update = Poco::findOrFail($request->id)->update($request->all());
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
        $especialidade = Poco::find($id);
        $especialidade->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
