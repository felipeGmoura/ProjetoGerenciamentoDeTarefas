@extends('layout.base', ["current"=>"users"])

@section('body')  
@php
$user= Auth::user();
@endphp  
    <form action = "{{ route('users.update', $user) }}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edide seu usuário</h1>
            <label for="name">Nome: </label>
            <input type = "text" class = "form-control" id="name" name="name">
            <br>
            <label for="email">Email: </label>
            <input type = "text" class = "form-control" id="email" name="email">
            <label for="password">Senha: </label>
            <input type = "text" class = "form-control" id="password" name="password">
            <label for="telefone">Telefone: </label>
            <input type = "text" class = "form-control" id="telefone" name="telefone">
            <select id="sexo" class="form-control">
                <option selected>Masculino</option>
                <option selected>Feminino</option>
                <option selected>Outros</option>
            </select>
        </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right"></label>
                <div class="form-group col-md-4">
                    <html lang="pt-br">
                    <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>jQuery UI Datepicker - Default functionality</title>
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                    <link rel="stylesheet" href="/resources/demos/style.css">
                    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                    <script>
                    $( function() {
                        $( "#datepicker" ).datepicker();
                    } );
                    </script>
                    </head>
                    <body>
        
                    <p>Data de Nasc.: <input type="text" id="data_nascimento"></p>
        
        
                    </body>
                    </html>
                </div>
            </div>
            <button class = "btn btn-primary" type = "submit">Editar</button>
        </div>
    </form>
@endsection