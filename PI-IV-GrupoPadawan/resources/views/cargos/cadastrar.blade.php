@extends('layouts.main')
@section('titulo', 'Cadastro de Cargo')
@section('conteudo')
    <h3><strong>Informe abaixo os dados do cargo:</strong></h3>
    <form method="post" action="{{route('cargos.store')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form">
            <label>Nome do Cargo:</label><br>
            <input type="text" name="descricao" placeholder="Informe o nome do cargo"><p>
        </div>
        <input type="submit" value="Cadastrar">
    </form>
@endsection