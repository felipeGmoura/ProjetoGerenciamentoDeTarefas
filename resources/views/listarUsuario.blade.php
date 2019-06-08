@extends('layout.base', ["current"=>"users"])

@section('body')
<table class="table table-hover">
        <thead>
          <tr>
          <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Sexo</th>
            <th scope="col">Data de nascimento</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($usuario as $usuar)
            <tr>
            <td>{{ $usuar->id }}</td>
                <td>{{ $usuar->name }}</td>
                <td>{{ $usuar->email }}</td>                                 
                <td>{{ $usuar->sexo }}</td>                                 
                <td>{{ $usuar->data_nascimento }}</td>                                 
                <td>{{ $usuar->telefone }}</td>  
                <td>
                  <form action = "{{ route('users.destroy', $usuar->id) }}" method = "POST">
                    @csrf
                    <a class="btn btn-success" href="{{ route('users.edit', $usuar->id) }}">Editar</a>
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