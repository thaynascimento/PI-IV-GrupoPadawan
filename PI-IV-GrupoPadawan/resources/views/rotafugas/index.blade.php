<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Página de Rotas de Fugas</title>
        <link rel="stylesheet" type="text/css" href="../../css/app.css"/>
    </head>
    <body>
        <div id="main">
            <p>
                <a href="{{URL::to('http://pi-iv-grupopadawan.app/rotafugas/create')}}">Cadastrar Nova Rota de Fuga</a>
            </p>
            <table border="1">
                <thead>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Ativo</th>
                    <th>Sala</th>
                    <th>Andar</th>
                    <th>Prédio</th>
                    <th>Imagem</th>
                </thead>
                <tbody>
                @forelse($rotafugas as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->descricao}}</td>
                        <td>{{$item->ativo}}</td>
                        <td>{{$item->sala->descricao}}</td>
                        <td>{{$item->sala->andar->descricao}}</td>
                        <td>{{$item->sala->localizacao->descricao}}</td>
                        <td><img width="85" src="/imagens/{{$item->imagem}}"/> </td>
                        <td>
                            <a href="{{route('rotafugas.edit', ['id' => $item->id])}}">Editar</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('rotafugas.destroy',['id' => $item->id])}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">Nenhuma localização encontrada!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </body>
</html>
