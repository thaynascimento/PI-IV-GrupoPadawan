<html>
    <head>
        <title>Cadastro de Salas</title>
        <link rel="stylesheet" type="text/css" href="../../css/app.css"/>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados da sala:</h2>
            <form method="post" action="{{route('salas.store')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form">
                    <label>Usuário:</label><br>
                    <input type="text" name="descricao" placeholder="Informe o nome da sala"><p>
                </div>
                <label>Prédio:</label><br>
                <select name="localizacao_id" id="localizacao_id">
                    @forelse($localizacoes as $item)
                        <option value="{{$item->id}}">{{$item->descricao}}</option>
                    @empty
                        <option disabled>Nenhum prédio cadastrado!</option>
                    @endforelse
                </select><p>
                <select name="andar_id" id="andar_id">
                    @forelse($andares as $item)
                        <option value="{{$item->id}}">{{$item->descricao}}</option>
                    @empty
                        <option disabled>Nenhum andar cadastrado!</option>
                    @endforelse
                </select><p>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>