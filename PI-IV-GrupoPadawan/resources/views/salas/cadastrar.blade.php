@extends('layouts.main')
@section('titulo', 'Cadastro de Sala')
@section('conteudo')
    <h3><strong>Informe abaixo os dados da sala:</strong></h3>
    <form method="post" class="table table-hover" action="{{route('salas.store')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form">
            <label>Nome da Sala:</label><br>
            <input type="text" name="descricao" placeholder="Informe o nome da sala"><p>
        </div>
        <label>Selecione Prédio:</label><br>
        <select name="localizacao_id" id="localizacao_id">
            @forelse($localizacoes as $item)
                <option value="{{$item->id}}">{{$item->descricao}}</option>
            @empty
                <option disabled>Nenhum prédio cadastrado!</option>
            @endforelse
        </select><p>
        <label>Selecione o Andar:</label><br>
        <select name="andar_id" id="andar_id">
            @forelse($andares as $item)
                <option value="{{$item->id}}">{{$item->descricao}}</option>
            @empty
                <option disabled>Nenhum andar cadastrado!</option>
            @endforelse
        </select><p>
        <input type="submit" value="Cadastrar">
    </form>
@endsection