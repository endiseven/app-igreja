<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Culto;
use App\Models\Membro;

class CultoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $culto = Culto::with('membro')->get();
        return view('culto.index', compact('culto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $membros = Membro::orderBy('nome')->get();
        $membrosEmCulto = Culto::pluck('membro_id')->toArray();
        $membrosDisponiveis = Membro::whereNotIn('id', $membrosEmCulto)->orderBy('nome')->get();
        return view('culto.create', compact('membrosDisponiveis'));
    }

    public function saida()
    {
        $culto = Culto::with('membro')->get();
        return view('culto.saida', compact('culto'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $culto = new Culto();
        $culto->membro_id = $request->membro_id;
        $culto->save();


        return redirect('/culto');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $culto = Culto::findOrFail($request->membro_id);
        $culto->delete();
    
        return redirect('/culto')->with('success', 'Registro deletado com sucesso!');
    }
    
    
}
