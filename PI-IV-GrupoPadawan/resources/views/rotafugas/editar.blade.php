<html>
    <head>
        <title>Edição de Rotas de Fugas</title>
        <link rel="stylesheet" type="text/css" href="../../css/app.css"/>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados da rota de fuga:</h2>
            <form method="post" action="{{route('rotafugas.update', ['id' => $id])}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form">
                    <label>Nome da Localização:</label><br>
                    <input type="text" name="descricao" value="{{$descricao}}"><p>
                </div><p>
                <label for="ativo">Status: </label><br>
                <select name="ativo" id="ativo" value="{{$ativo}}">
                    @if($ativo == 1){
                        <option value="1" id="ativo" selected>Ativo</option>
                        <option value="0" id="ativo">Inativo</option>
                    }@else{
                        <option value="1" id="ativo" >Ativo</option>
                        <option value="0" id="ativo" selected>Inativo</option>
                    }
                    @endif
                </select><p>
                <select name="sala_id" id="sala_id">
                    @forelse($sala as $item)
                        <option value="{{$item->id}}">{{$item->descricao}}</option>
                    @empty
                        <option disabled>Nenhuma sala cadastrado!</option>
                    @endforelse
                </select><p>
                <img width="85" src="/imagens/{{$imagem}}"/><p>
                <input type="file" name="imagem" value="imagem" id="imagem"><p>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>