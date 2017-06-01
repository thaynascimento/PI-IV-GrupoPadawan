<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Página de Cargos</title>
    </head>
    <body>
        <div id="main">
            <p>
                <a href="{{URL::to('http://pi-iv-grupopadawan.app/cargos/create')}}">Cadastrar Novo Cargo</a>
            </p>
            <table border="1">
                <thead>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Ativo</th>
                </thead>
                <tbody>
                @forelse($cargos as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->descricao}}</td>
                        <td>{{$item->ativo}}</td>
                        <td>
                            <a href="{{route('cargos.edit', ['id' => $item->id])}}">Editar</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('cargos.destroy',['id' => $item->id])}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">Nenhum cargo encontrado!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </body>
</html>
