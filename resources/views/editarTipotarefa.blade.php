@extends('layout.base', ["current"=>"tipotarefas"])

@section('body')
    <form action = "{{ route('tipotarefas.update', $tipot) }}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edide tipo de tarefa</h1>
            <label for="name">Nome: </label>
            <input type = "text" class = "form-control" id="name" name="name" value="{{$tipot->nome}}">
            <br>
            <button class = "btn btn-primary" type = "submit">Editar</button>
        </div>
    </form>
@endsection