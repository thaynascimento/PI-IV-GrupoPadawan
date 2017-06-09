@extends('layouts.main')
@section('titulo', 'Edição de Cargo')
@section('conteudo')
    <h3><strong>Informe abaixo os dados do cargo:</strong></h3>
    <form method="post" action="{{route('cargos.update', ['id' => $id])}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <div class="form">
            <label>Nome do Cargo:</label><br>
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