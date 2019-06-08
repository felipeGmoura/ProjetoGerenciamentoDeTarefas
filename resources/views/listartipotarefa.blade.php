@extends('layout.base', ["current"=>"tipotarefas"])

@section('body')
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($tipotarefa as $tipotaf)
            <tr>
                <td>{{ $tipotaf->id }}</td>
                <td>{{ $tipotaf->nome }}</td>

                <td>
                  <form action = "{{ route('tipotarefas.destroy', $tipotaf->id) }}" method = "POST">
                    @csrf
                    <a class="btn btn-success" href="{{ route('tipotarefas.edit', $tipotaf->id) }}">Editar</a>
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