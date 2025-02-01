<?php

namespace App\Http\Controllers;
use App\Models\Sector;
use App\Models\Trincheira;
use Illuminate\Http\Request;

class TrincheiraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trincheiras = Trincheira::orderByDesc('id')->get();
        $sectors = Sector::orderByDesc('id')->get();
        return view('trincheira.index', ['trincheiras' => $trincheiras,'sectors' => $sectors]);
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
        $trincheiras = $request->all();
        // dd($profissional);
         $trincheiras = Trincheira::create($trincheiras);
         return redirect()->back()->with('success','Profissional de saúde cadastrado com sucesso');


    }

    /**
     * Display the specified resource.
     */
    public function show(Trincheira $trincheira)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trincheira $trincheira)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trincheira $trincheira)
    {
        $update = Trincheira::findOrFail($request->id)->update($request->all());
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
        $especialidade = Trincheira::find($id);
        $especialidade->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
}
