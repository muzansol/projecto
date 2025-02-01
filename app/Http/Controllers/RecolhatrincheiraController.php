<?php

namespace App\Http\Controllers;

use App\Models\Recolhatrincheira;
use App\Models\Trincheira;
use Illuminate\Http\Request;

class RecolhatrincheiraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recolhatrincheira = Recolhatrincheira::orderByDesc('id')->get();
        $trincheira = Trincheira::orderByDesc('id')->get();
  
        // Carregar a VIEW
        return view('recolha_trincheiras.index', ['recolhatrincheira' =>$recolhatrincheira,'trincheira'=>$trincheira]);
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
        $recolhatrincheira = $request->all();
        // dd($profissional);
         $recolhatrincheira = Recolhatrincheira::create( $recolhatrincheira);
         return redirect()->back()->with('success','Registro cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recolhatrincheira $recolhatrincheira)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recolhatrincheira $recolhatrincheira)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recolhatrincheira $recolhatrincheira)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $especialidade = Recolhatrincheira::find($id);
        $especialidade->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
