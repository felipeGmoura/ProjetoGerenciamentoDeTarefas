@extends('layout.base', ["current"=>"categorias"])

@section('body')
<form action = "{{route('tipotarefa.store')}}" method = "POST">
        @csrf
        <div class = "form-group">
            <h1>Cadastro de Tipo de Tarefa</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nome">
            <br>
            <button class = "btn btn-primary" type = "submit">Cadastrar!</button>
        </div>
    </form>

@endsection