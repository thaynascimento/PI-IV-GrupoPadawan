@extends('layouts.main')
@section('titulo', 'Edição de Sala')
@section('conteudo')
    <h3><strong>Informe abaixo os dados da sala:</strong></h3>
    <form method="post" class="table table-hover" action="{{route('salas.update', ['id' => $id])}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <div class="form">
            <label>Nome da Sala:</label><br>
            <input type="text" name="descricao" value="{{$descricao}}"><p>
        </div>
        <label>Selecione o Prédio:</label><br>
        <select name="localizacao_id" id="localizacao_id">
            @forelse($localizacao as $item)
                <option value="{{$item->id}}">{{$item->descricao}}</option>
            @empty
                <option disabled>Nenhum prédio cadastrado!</option>
            @endforelse
        </select><p>
        <label>Selecione o Andar:</label><br>
        <select name="andar_id" id="andar_id">
            @forelse($andar as $item)
                <option value="{{$item->id}}">{{$item->descricao}}</option>
            @empty
                <option disabled>Nenhum andar cadastrado!</option>
            @endforelse
        </select><p>
        <input type="submit" value="Salvar Alterações">
    </form>
@endsection