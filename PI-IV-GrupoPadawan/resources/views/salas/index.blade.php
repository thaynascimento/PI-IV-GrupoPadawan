<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Página de Usuários</title>
        <link rel="stylesheet" type="text/css" href="../../css/app.css"/>
    </head>
    <body>
        <div id="main">
            <p>
                <a href="{{URL::to('http://pi-iv-grupopadawan.app/salas/create')}}">Cadastrar Nova Sala</a>
            </p>
            <table border="1">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ativo</th>
                    <th>Prédio</th>
                    <th>Andar</th>
                </thead>
                <tbody>
                @forelse($salas as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->descricao}}</td>
                        <td>{{$item->ativo}}</td>
                        <td>{{$item->localizacao->descricao}}</td>
                        <td>{{$item->andar->descricao}}</td>
                        <td>
                            <a href="{{route('salas.edit', ['id' => $item->id])}}">Editar</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('salas.destroy',['id' => $item->id])}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">Nenhuma sala encontrada!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </body>
</html>
