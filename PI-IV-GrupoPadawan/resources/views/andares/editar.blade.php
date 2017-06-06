<html>
    <head>
        <title>Edição de Andares</title>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados do andar:</h2>
            <form method="post" action="{{route('andares.update', ['id' => $id])}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form">
                    <label>Identificação do Andar:</label><br>
                    <input type="text" name="descricao" value="{{$descricao}}"><p>
                </div>
                <select name="localizacao_id">
                    @forelse($localizacoes as $item)
                        @if($item->id === $localizacao_id)
                            <option value="{{$item->id}}" selected>{{$item->descricao}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->descricao}}</option>
                        @endif
                    @empty
                        <option disabled>Nenhuma localização cadastrado</option>
                    @endforelse
                </select><p>
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
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>