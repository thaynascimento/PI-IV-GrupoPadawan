<html>
    <head>
        <title>Cadastro de Localizações</title>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados da localização:</h2>
            <form method="post" action="{{route('localizacoes.store')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form">
                    <label>Nome da Localização:</label><br>
                    <input type="text" name="descricao" placeholder="Informe o nome do cargo"><p>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>