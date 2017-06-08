<html>
    <head>
        <title>Edição de Salas</title>
        <link rel="stylesheet" type="text/css" href="../../css/app.css"/>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados da sala:</h2>
            <form method="post" action="{{route('salas.update', ['id' => $id])}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form">
                    <label>Nome:</label><br>
                    <input type="text" name="descricao" value="{{$descricao}}"><p>
                </div>
                <label>Localização:</label><br>
                <select name="localizacao_id" id="localizacao_id">
                    @forelse($localizacao as $item)
                        <option value="{{$item->id}}">{{$item->descricao}}</option>
                    @empty
                        <option disabled>Nenhum prédio cadastrado!</option>
                    @endforelse
                </select><p>
                <label>Andar:</label><br>
                <select name="andar_id" id="andar_id">
                    @forelse($andar as $item)
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