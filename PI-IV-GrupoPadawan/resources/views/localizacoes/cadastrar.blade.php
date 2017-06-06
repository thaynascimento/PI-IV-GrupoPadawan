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
                    <input type="text" name="descricao" placeholder="Informe o nome do prédio"><p>
                </div>
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