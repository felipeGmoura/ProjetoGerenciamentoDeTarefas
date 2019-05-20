<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas_listar', compact('tarefas'));
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function create()
    {
        return view('cadastrar_tarefas');
    }

    
    public function store(Request $request)
    {
        $tarefas = new Tarefa();
        $tarefas->titulo = $request->input("titulo");
        $tarefas->privacidade = $request->input("privacidade");
        $tarefas->DescricaoTarefa = $request->input("DescricaoTarefa");
        $tarefas->status = $request->input("status");
        $tarefas->data_conclu = $request->input("ldata_conclu");
        $tarefas->senha = $request->input("senha");
        $tarefas->dataNasc = $request->input("DataNasc");
        $tarefas->save();
        return redirect()->route('tarefas.index');
    }


    public function show(tarefas $tarefas)
    {
        //
    }

    
    public function edit(tarefas $tarefas)
    {
        return view('tarefas_editar', compact('tarefas'));
    }

    
    public function update(Request $request,tarefas $tarefas)
    {
        $tarefas->titulo = $request->input("titulo");
        $tarefas->privacidade = $request->input("privacidade");
        $tarefas->DescricaoTarefa = $request->input("DescricaoTarefa");
        $tarefas->status = $request->input("status");
        $tarefas->data_conclu = $request->input("data_conclu");
        $tarefas->senha = $request->input("senha");
        $tarefas->dataNasc = $request->input("DataNasc");
        $tarefas->save();
        return redirect()->route('tarefas.index');
    }

    
    public function destroy(tarefas $tarefas)
    {
        $tarefas->delete();
        return redirect()->route('tarefas.index');
    }
}
