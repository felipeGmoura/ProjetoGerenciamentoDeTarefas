<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefa = Tarefa::all();
        return view('listarTarefa', compact('tarefa'));
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
        $tarefa = new Tarefa();
        $tarefa->titulo = $request->input("titulo");
        $tarefa->privacidade = $request->input("privacidade");
        $tarefa->DescricaoTarefa = $request->input("DescricaoTarefa");
        $tarefa->status = $request->input("status");
        $tarefa->data_conclu = $request->input("ldata_conclu");
        $tarefa->senha = $request->input("senha");
        $tarefa->save();
        return redirect()->route('tarefa.index');
    }


    public function show(tarefa $tarefa)
    {
        //
    }

    
    public function edit(tarefa $tarefa)
    {
        return view('editarTarefa', compact('tarefa'));
    }

    
    public function update(Request $request,tarefa $tarefa)
    {
        $tarefa->titulo = $request->input("titulo");
        $tarefa->privacidade = $request->input("privacidade");
        $tarefa->DescricaoTarefa = $request->input("DescricaoTarefa");
        $tarefa->status = $request->input("status");
        $tarefa->data_conclu = $request->input("data_conclu");
        $tarefa->senha = $request->input("senha");
        $tarefa->save();
        return redirect()->route('tarefa.index');
    }

    
    public function destroy(tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('tarefa.index');
    }
}
