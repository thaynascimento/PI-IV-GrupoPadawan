@extends('layouts.main')
@section('titulo', 'Cadastro de Prédio')
@section('conteudo')
    <h2>Informe abaixo os dados da localização:</h2>
    <form method="post" action="{{route('localizacoes.update', ['id' => $id])}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <div class="form">
            <label>Nome da localização:</label><br>
            <input type="text" name="descricao" value="{{$descricao}}"><p>
        </div>
        <label for="ativo">Status: </label><br>
        <select name="ativo" id="ativo" value="{{$ativo}}">
            @if($ativo == 'Sim'){
            <option value="1" id="ativo" selected>Ativo</option>
            <option value="0" id="ativo">Inativo</option>
            }@else{
            <option value="1" id="ativo" >Ativo</option>
            <option value="0" id="ativo" selected>Inativo</option>
            }
            @endif
        </select><p><p>
            <input type="submit" value="Salvar Alterações">
    </form>
@endsection