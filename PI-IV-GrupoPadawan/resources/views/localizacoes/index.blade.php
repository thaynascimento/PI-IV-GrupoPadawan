@extends('layouts.main')
@section('titulo', 'Página de Prédios')
@section('conteudo')
        <p>
            <button type="submit" class="btn btn-sm btn-danger">
                <a href="{{route('localizacoes.create')}}">
                    <span class="glyphicon glyphicon-plus">Adicionar</span></a>
            </button>
        </p>
        <h3><strong>Listagem de Prédios</strong></h3>
        <table class="table table-hover">
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
                        <a href="{{route('localizacoes.edit', ['id' => $item->id])}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('localizacoes.destroy',['id' => $item->id])}}">
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
                    <td colspan="9">Nenhum prédio encontrado!</td>
                </tr>
            @endforelse
            </tbody>
        </table>
@endsection