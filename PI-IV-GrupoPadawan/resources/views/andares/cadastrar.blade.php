@extends('layouts.main')
@section('titulo', 'Cadastro de Andar')
@section('conteudo')
        <h3><strong>Informe abaixo os dados do andar:</strong></h3>
        <form method="post" class="table table-hover" action="{{route('andares.store')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form">
                <label>Identificação do Andar:</label><br>
                <input type="text" name="descricao" placeholder="Informe a identificação do andar"><p>
            </div>
            <input type="submit" value="Cadastrar">
        </form>
@endsection