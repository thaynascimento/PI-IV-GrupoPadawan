@extends('layouts.main')
@section('titulo', 'Página de Usuários')
@section('conteudo')
    <p>
        <button type="submit" class="btn btn-sm btn-danger">
            <a href="{{route('usuarios.create')}}">
            <span class="glyphicon glyphicon-plus">Adicionar</span></a>
        </button>
    </p>
    <h3><strong>Listagem de Usuários</strong></h3>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Centro de Custo</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Líder de Fuga?</th>
            <th>Ativo</th>
            <th>Cargo</th>
            <th>Imagem</th>
            <th>Ações</th>
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
                <td><img width="90" src="/imagens/{{$item->imagem}}"/> </td>
                <td>
                    <a href="{{route('usuarios.edit', ['id' => $item->id])}}">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <form method="post" action="{{route('usuarios.destroy',['id' => $item->id])}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
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
@endsection
