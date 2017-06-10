@extends('layouts.main')
@section('titulo', 'Edição de Rota de Fuga')
@section('conteudo')
        <h3><strong>Informe abaixo os dados da rota de fuga:</strong></h3>
        <form method="post" class="table table-hover" action="{{route('rotafugas.update', ['id' => $id])}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
            <div class="form">
                <label>Nome da Localização:</label><br>
                <input type="text" name="descricao" value="{{$descricao}}"><p>
            </div><p>
            <label for="ativo">Informe o Status: </label><br>
            <select name="ativo" id="ativo" value="{{$ativo}}">
                @if($ativo == 'Sim'){
                    <option value="1" id="ativo" selected>Ativo</option>
                    <option value="0" id="ativo">Inativo</option>
                }@else{
                    <option value="1" id="ativo" >Ativo</option>
                    <option value="0" id="ativo" selected>Inativo</option>
                }
                @endif
            </select><p>
            <label>Selecione a Sala:</label><br>
            <select name="sala_id" id="sala_id">
                @forelse($sala as $item)
                    <option value="{{$item->id}}">{{$item->descricao}}</option>
                @empty
                    <option disabled>Nenhuma sala cadastrado!</option>
                @endforelse
            </select><p>
            <label>Imagem Atual:</label><br>
            <img width="85" src="/imagens/{{$imagem}}"/><p>
            <label>Selecione a Nova Imagem:</label><br>
            <input type="file" name="novaImagem" value="novaImagem" id="novaImagem"><p>
            <input type="submit" value="Salvar Alterações">
        </form>
@endsection