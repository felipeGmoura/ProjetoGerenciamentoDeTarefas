<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tipotarefa = Tarefa::all();
        return view('tipotarefa_listar', compact('tipotarefa'));
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function create()
    {
        return view('cadastrarTarefa');
    }

    
    public function store(Request $request)
    {
        $tipotarefa = new Tarefa();
        $tipotarefa->nome = $request->input("nome");
        $tipotarefa->save();
        return redirect()->route('tipotarefa.index');
    }


    public function show(tipotarefa $tipotarefa)
    {
        //
    }

    
    public function edit(tipotarefa $tipotarefa)
    {
        return view('tipotarefa_editar', compact('tipotarefa'));
    }

    
    public function update(Request $request,tipotarefa $tipotarefa)
    {
        $tipotarefa->nome = $request->input("nome");
        $tipotarefa->save();
        return redirect()->route('tipotarefa.index');
    }

    
    public function destroy(tipotarefa $tipotarefa)
    {
        $tipotarefa->delete();
        return redirect()->route('tipotarefa.index');
    }
}