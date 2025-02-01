<?php

namespace App\Http\Controllers;

use App\Models\Bloco;
use App\Models\Sector;
use Illuminate\Http\Request;

class BlocoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blocos = Bloco::orderByDesc('id')->get();
        $sectors = Sector::orderByDesc('id')->get();
        return view('bloco.index', ['blocos' => $blocos, 'sectors' => $sectors]);
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
        $blocos = $request->all();
         //dd($request);
         $blocos = Bloco::create($blocos);
         return redirect()->back()->with('success','Bloco cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bloco $bloco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bloco $bloco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bloco $bloco)
    {
        $update = Bloco::findOrFail($request->id)->update($request->all());
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
        $bloco = Bloco::find($id);
        $bloco->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
