@extends('layouts.main')
@section('titulo', 'Página de Salas')
@section('conteudo')
        <p>
            <button type="submit" class="btn btn-sm btn-danger">
                <a href="{{route('salas.create')}}">
                    <span class="glyphicon glyphicon-plus">Adicionar</span></a>
            </button>
        </p>
        <table class="table table-hover">
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
                        <a href="{{route('salas.edit', ['id' => $item->id])}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('salas.destroy',['id' => $item->id])}}">
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
                    <td colspan="9">Nenhuma sala encontrada!</td>
                </tr>
            @endforelse
            </tbody>
        </table>
@endsection
