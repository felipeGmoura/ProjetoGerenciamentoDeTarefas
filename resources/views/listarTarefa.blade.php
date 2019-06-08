@extends('layout.base', ["current"=>"tipotarefa"])

@section('body')
@php
$user = Auth::user()->id;
$tarefass = DB::table('tarefas')->where('usuario_id', $user)->get();
@endphp
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">Usuário</th>
            <th scope="col">Privacidade</th>
            <th scope="col">Descrição da Tarefa</th>
            <th scope="col">Status</th>
            <th scope="col">Data de conclusão</th>
            <th scope="col">Ações</th>
            <th scope="col">Identificação tipo de tarefa</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tarefas as $taf)
            <tr>
                <td>{{ $taf->id }}</td>
                <td>{{ $taf->titulo }}</td>
                <td>{{ $taf->usuario_id }}</td>
                <td>{{ $taf->privacidade }}</td>
                <td>{{ $taf->descricaoTarefa }}</td>
                <td>{{ $taf->status }}</td>
                <td>{{ $taf->data_conclu }}</td>
                <td>{{ $taf->tipotarefa_id }}</td>
                <td>
                  <form action = "{{ route('tarefas.destroy', $taf->id) }}" method = "POST">
                    @csrf
                    <a class="btn btn-success" href="{{ route('tarefas.edit', $taf->id) }}">Editar</a>
                    @method('DELETE')
                    <button type = "submit" class="btn btn-danger">Deletar</button>
                  </form>
                </td>
                </td>                   
            </tr>          
            @endforeach     
        </tbody>
      </table>
@endsection