<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Página de Localizações</title>
    </head>
    <body>
        <div id="main">
            <p>
                <a href="{{URL::to('http://pi-iv-grupopadawan.app/localizacoes/create')}}">Cadastrar Nova Localização</a>
            </p>
            <table border="1">
                <thead>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Ativo</th>
                </thead>
                <tbody>
                @forelse($localizacoes as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->descricao}}</td>
                        <td>{{$item->ativo}}</td>
                        <td>
                            <a href="{{route('localizacoes.edit', ['id' => $item->id])}}">Editar</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('localizacoes.destroy',['id' => $item->id])}}">
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
