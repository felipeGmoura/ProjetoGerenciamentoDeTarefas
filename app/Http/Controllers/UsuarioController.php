<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios_listar', compact('usuarios'));
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
        $usuarios = new Usuario();
        $usuarios->nome = $request->input("nome");
        $usuarios->sexo = $request->input("sexo");
        $usuarios->email = $request->input("email");
        $usuarios->telefone = $request->input("telefone");
        $usuarios->login = $request->input("login");
        $usuarios->senha = $request->input("password");
        $usuarios->dataNasc = $request->input("DataNasc");
        $usuarios->save();
        return redirect()->route('usuarios.index');
    }


    public function show(Usuarios $usuarios)
    {
        //
    }

    
    public function edit(Usuarios $usuarios)
    {
        return view('usuarios_editar', compact('usuarios'));
    }

    
    public function update(Request $request, Usuarios $usuarios)
    {
        $usuarios->nome = $request->input("nome");
        $usuarios->sexo = $request->input("sexo");
        $usuarios->email = $request->input("email");
        $usuarios->telefone = $request->input("telefone");
        $usuarios->login = $request->input("login");
        $usuarios->senha = $request->input("senha");
        $usuarios->dataNasc = $request->input("DataNasc");
        $usuarios->save();
        return redirect()->route('usuarios.index');
    }

    
    public function destroy(Usuarios $usuarios)
    {
        $usuarios->delete();
        return redirect()->route('usuarios.index');
    }
}
