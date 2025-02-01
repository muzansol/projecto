<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{

    public function index()
    {
        $sectors = Sector::orderByDesc('id')->get();
         return view('sector.index', ['sectors' => $sectors]);     
    }

    
    public function store(Request $request)
    {
    
        $profissional = $request->all();
        // dd($profissional);
         $profissional = Sector::create( $profissional);
         return redirect()->back()->with('success','setor  cadastrado com sucesso');



    }

    public function show(Sector $sector)
    {
        //
    }

    public function update(Request $request, Sector $sector)
    {
        $update = Sector::findOrFail($request->id)->update($request->all());
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
        $especialidade = Sector::find($id);
        $especialidade->delete();
        return redirect()->back()->with('success','Registro eliminado com Sucesso');
    }
   

    }

