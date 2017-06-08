<html>
    <head>
            <title>Cadastro de Rotas de Fugas</title>
        <link rel="stylesheet" type="text/css" href="../../css/app.css"/>
    </head>
        <body>
        <div>
            <h2>Informe abaixo os dados da rota de fuga:</h2>
            <form method="post" action="{{route('rotafugas.store')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form">
                    <label>Nome da Localização:</label><br>
                    <input type="text" name="descricao" placeholder="Informe o nome do ponto de fuga"><p>
                </div><p>
                <select name="sala_id" id="sala_id">
                    @forelse($salas as $item)
                        <option value="{{$item->id}}">{{$item->descricao}}</option>
                    @empty
                        <option disabled>Nenhuma sala cadastrado!</option>
                    @endforelse
                </select><p>
                <input type="file" name="imagem" value="imagem" id="imagem"><p>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>