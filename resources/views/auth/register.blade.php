@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome ') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name ')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="login" class="col-md-4 col-form-label text-md-right">{{ __('Login') }}</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="inputState">Sexo</label>
                            <div class="form-group col-md-4">
                                <select id="sexo" class="form-control">
                                    <option selected>Masculino</option>
                                    <option selected>Feminino</option>
                                    <option selected>Outros</option>
                                </select>
                            </div>
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
                        <div class="form-group row">
                            <label for="telefonecell" class="col-md-4 col-form-label text-md-right">{{ __('telefone/cell') }}</label>

                            <div class="col-md-6">
                                <input id="telefonecell" type="text" class="form-control @error('telefonecell') is-invalid @enderror" name="telefonecell" value="{{ old('telefonecell') }}" required autocomplete="telefonecell" autofocus>

                                @error('name ')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
