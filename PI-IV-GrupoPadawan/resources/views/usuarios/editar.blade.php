<html>
    <head>
        <title>Edição de Usuários</title>
        <link rel="stylesheet" type="text/css" href="../../css/app.css"/>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados do usuário:</h2>
            <form method="post" action="{{route('usuarios.update', ['id' => $id])}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form">
                    <label>Usuário:</label><br>
                    <input type="text" name="nome" value="{{$nome}}"><p>
                </div>
                <div class="form">
                    <label>Centro de Custo:</label><br>
                    <input type="text" name="centro_custo" value="{{$centro_custo}}"><p>
                </div>
                <div class="form">
                    <label>E-mail:</label><br>
                    <input type="text" name="email" value="{{$email}}"><p>
                </div>
                <div class="form">
                    <label>Telefone:</label><br>
                    <input type="text" name="telefone" value="{{$telefone}}"><p>
                </div>
                @if($lider_de_fuga == 'Sim')
                    <input type="checkbox" name="lider_de_fuga" value="lider_de_fuga" checked>Líder de Fuga?<p>
                @else
                    <input type="checkbox" name="lider_de_fuga" value="lider_de_fuga">Líder de Fuga?<p>
                @endif
                <label>Cargo:</label><br>
                <select name="cargo_id">
                    @forelse($cargo as $item)
                        @if($item->id === $cargo_id)
                            <option value="{{$item->id}}" selected>{{$item->descricao}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->descricao}}</option>
                        @endif
                    @empty
                        <option disabled>Nenhum cargo cadastrado</option>
                    @endforelse
                </select><p>
                <label for="ativo">Status: </label><br>
                <select name="ativo" id="ativo" value="{{$ativo}}">
                    @if($ativo == 'Sim'){
                        <option value="1" id="ativo" selected>Ativo</option>
                        <option value="0" id="ativo">Inativo</option>
                    }@else{
                        <option value="1" id="ativo" >Ativo</option>
                        <option value="0" id="ativo" selected>Inativo</option>
                    }
                    @endif
                </select><p>
                <div class="form">
                    <label>Senha:</label><br>
                    <input type="password" name="senha" value="{{$senha}}"><p>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>