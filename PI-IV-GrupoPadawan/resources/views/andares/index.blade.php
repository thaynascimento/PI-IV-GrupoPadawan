@extends('layouts.main')
@section('titulo', 'Página de Andares')
@section('conteudo')
    <p>
        <button type="submit" class="btn btn-sm btn-danger">
            <a href="{{route('andares.create')}}">
                <span class="glyphicon glyphicon-plus">Adicionar</span></a>
        </button>
    </p>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Descrição</th>
            <th>Ativo</th>
        </thead>
        <tbody>
            @forelse($andares as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->descricao}}</td>
                    <td>{{$item->ativo}}</td>
                    <td>
                        <a href="{{route('andares.edit', ['id' => $item->id])}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('andares.destroy',['id' => $item->id])}}">
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
                    <td colspan="9">Nenhum andar encontrado!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
