@extends('layout.base', ["current"=>"categorias"])

@section('body')
<form action = "{{route('Tarefa.store')}}" method = "POST">
        @csrf
        <div class = "form-group">
            <h1>Cadastro de Título</h1>
            <label for="titulo">Título: </label>
            <input type = "text" class = "form-control" id="nome" name="nome">
            <br>
            <label for="descricao">Descrição: </label>
            <input type = "text" class = "form-control" id="descricao" name="descricao">
            <label for="inputState">Privacidade</label>
            <select id="sexoselec" class="form-control">
                <option selected>Pública</option>
                <option selected>Privada</option>
            </select>
            <label for="inputState">Privacidade</label>
            <select id="sexoselec" class="form-control">
                <option selected>Concluída</option>
                <option selected>Privada</option>
            </select>
            <button class = "btn btn-primary" type = "submit">Cadastrar!</button>
        </div>
    </form>

@endsection