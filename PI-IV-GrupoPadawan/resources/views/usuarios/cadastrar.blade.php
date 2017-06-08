<html>
    <head>
        <title>Cadastro de Usuários</title>
        <link rel="stylesheet" type="text/css" href="../../css/app.css"/>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados do usuário:</h2>
            <form method="post" action="{{route('usuarios.store')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form">
                    <label>Nome:</label><br>
                    <input type="text" name="nome" placeholder="Informe o nome"><p>
                </div>
                <div class="form">
                    <label>Centro de Custo:</label><br>
                    <input type="text" name="centro_custo" placeholder="Informe o centro de custo"><p>
                </div>
                <div class="form">
                    <label>E-mail:</label><br>
                    <input type="text" name="email" placeholder="Informe o e-mail"><p>
                </div>
                <div class="form">
                    <label>Telefone:</label><br>
                    <input type="text" name="telefone" placeholder="Informe o telefone"><p>
                </div>
                <input type="checkbox" name="lider_de_fuga" value="lider_de_fuga">Líder de Fuga?<p>
                <label>Cargo:</label><br>
                <select name="cargo_id" id="cargo_id">
                    @forelse($cargos as $item)
                        <option value="{{$item->id}}">{{$item->descricao}}</option>
                    @empty
                        <option disabled>Nenhum cargo cadastrado!</option>
                    @endforelse
                </select><p>
                <div class="form">
                    <label>Senha:</label><br>
                    <input type="password" name="senha" placeholder="******"><p>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>