<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Página de Usuários</title>
    </head>
    <body>
        <div id="main">
            <p>
                <a href="{{URL::to('http://pi-iv-grupopadawan.app/usuarios/create')}}">Cadastrar Novo Usuário</a>
            </p>
            <table border="1">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Centro de Custo</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Líder de Fuga?</th>
                    <th>Ativo</th>
                    <th>Cargo</th>
                </thead>
                <tbody>
                @forelse($usuarios as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nome}}</td>
                        <td>{{$item->centro_custo}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->telefone}}</td>
                        <td>{{$item->lider_de_fuga}}</td>
                        <td>{{$item->ativo}}</td>
                        <td>{{$item->cargo->descricao}}</td>
                        <td>
                            <a href="{{route('usuarios.edit', ['id' => $item->id])}}">Editar</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('usuarios.destroy',['id' => $item->id])}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">Nenhum usuário encontrado!</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </body>
</html>
