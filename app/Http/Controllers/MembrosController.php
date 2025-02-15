<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membro;

class MembrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membros = Membro::all();
        return view('membros.index', compact('membros'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('membros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $membro = new Membro();
        $membro->nome = $request->nome;
        $membro->data_nascimento = $request->data_nascimento;
        $membro->responsavel = $request->responsavel;
        $membro->telefone = $request->telefone;
        $membro->save();


        return redirect('/membros');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $membro = Membro::findOrFail($id);
        return view('membros.edit', compact('membro'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $membro = Membro::findOrFail($id);
        $membro->nome = $request->nome;
        $membro->data_nascimento = $request->data_nascimento;
        $membro->responsavel = $request->responsavel;
        $membro->telefone = $request->telefone;
        $membro->save();
    
        return redirect('/membros')->with('success', 'Membro atualizado com sucesso!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    // public function edit($id)
    // {
    //     $membro = Membro::findOrFail($id);
    //     return view('membros.edit', compact('membro'));
    // }
    
    public function destroy($id)
    {
        $membro = Membro::findOrFail($id);
        $membro->delete();
    
        return redirect('/membros')->with('success', 'Registro deletado com sucesso!');
    }
    // public function destroy(Request $request)
    // {
    //     $membro= Membro::findOrFail($request->membro_id);
    //     $membro->delete();
    
    //     return redirect('/membros')->with('success', 'Registro deletado com sucesso!');
    // }
    
    
}
