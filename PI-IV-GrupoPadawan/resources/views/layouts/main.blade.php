<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1"/>
        <meta name="keywords" content="Faculdade UCL">
        <meta name="author" content="Thayná Nascimento">

        <title>Rota de Fuga - @yield('titulo', 'Home Page') </title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        @yield('estilos')
    </head>
    <body>
        <div class="conteudo">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand">Sistema Gerenciador de Rotas de Fugas</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('usuarios.index') }}">Usuários</a></li>
                        <li><a href="{{ route('cargos.index') }}">Cargos</a></li>
                        <li><a href="{{ route('salas.index') }}">Salas</a></li>
                        <li><a href="{{ route('andares.index') }}">Andares</a></li>
                        <li><a href="{{ route('localizacoes.index') }}">Prédios</a></li>
                        <li><a href="{{ route('rotafugas.index') }}">Rotas de Fugas</a></li>
                    </ul>
                    <!--<ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>-->
                </div>
            </nav>
            @yield('conteudo')
        </div>
    </body>
</html>