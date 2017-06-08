@extends('layouts.main')
@section('titulo', 'Página de Rotas de Fugas')
@section('conteudo')
        <p>
            <button type="submit" class="btn btn-sm btn-danger">
                <a href="{{route('rotafugas.create')}}">
                    <span class="glyphicon glyphicon-plus">Adicionar</span></a>
            </button>
        </p>
        <table class="table table-hover">
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
                    <td><img width="120" src="/imagens/{{$item->imagem}}"/> </td>
                    <td>
                        <a href="{{route('rotafugas.edit', ['id' => $item->id])}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('rotafugas.destroy',['id' => $item->id])}}">
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
                    <td colspan="9">Nenhuma localização encontrada!</td>
                </tr>
            @endforelse
            </tbody>
        </table>
@endsection

