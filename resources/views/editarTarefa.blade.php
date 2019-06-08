@extends('layout.base', ["current"=>"tarefas"])

@section('body')
<form action = "{{route('Tarefa.store')}}" method = "POST">
        @csrf
        <div class = "form-group">
            <h1>Edite a tarefa:</h1>
            <label for="titulo">Título </label>
            <input type = "text" class = "form-control" id="titulo" name="titulo"value="{{ old( 'titulo', $tarefa->titulo) }}">
            <br>
            <label for="descricaoTarefa">Descrição </label>
            <input type = "text" class = "form-control" id="descricaoTarefa" name="descricaoTarefa" value="{{ old( 'descricaoTarefa', $tarefa->descricaoTarefa) }}">
            <label for="inputState">Privacidade</label>
            <select id="sexoselec" class="form-control">
                <option selected>Pública</option>
                <option selected>Privada</option>
            </select>
            <label for="inputState">Status</label>
            <select id="sexoselec" class="form-control">
                <option selected>Concluída</option>
                <option selected>Pendente</option>
            </select>
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
        
            <p>Data de Conclução: <input type="text" id="data_conclu"></p>
        
        
            </body>
            </html>
            <label for="tipotarefa_id">Identificação tipo tarefa </label>
            <input type = "text" class = "form-control" id="tipotarefa_id" name="tipotarefa_id" value="{{ old( 'tipotarefa_id', $tarefa->tipotarefa_id) }}">


            <button class = "btn btn-primary" type = "submit">Editar</button>
        </div>
    </form>

@endsection
