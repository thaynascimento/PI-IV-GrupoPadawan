<html>
    <head>
        <title>Cadastro de Cargos</title>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados do cargo:</h2>
            <form method="post" action="{{route('cargos.store')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form">
                    <label>Nome do Cargo:</label><br>
                    <input type="text" name="descricao" placeholder="Informe o nome do cargo"><p>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>