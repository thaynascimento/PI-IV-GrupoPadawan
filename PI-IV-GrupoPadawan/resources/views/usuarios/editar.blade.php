@extends('layouts.main')
@section('titulo', 'Edição de Usuário')
@section('conteudo')
    <h3><strong>Informe abaixo os dados do usuário:</strong></h3>
    <form method="post" class="table table-hover" action="{{route('usuarios.update', ['id' => $id])}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <div class="form">
            <label>Usuário:</label><br>
            <input type="text" name="nome" value="{{$nome}}"><p>
        </div>
        <div class="form">
            <label>Centro de Custo:</label><br>
            <input type="text" name="centro_custo" value="{{$centro_custo}}"><p>
        </div>
        <div class="form">
            <label>E-mail:</label><br>
            <input type="text" name="email" value="{{$email}}"><p>
        </div>
        <div class="form">
            <label>Telefone:</label><br>
            <input type="text" name="telefone" value="{{$telefone}}"><p>
        </div>
        @if($lider_de_fuga == 'Sim')
            <input type="checkbox" name="lider_de_fuga" value="lider_de_fuga" checked>Líder de Fuga?<p>
        @else
            <input type="checkbox" name="lider_de_fuga" value="lider_de_fuga">Líder de Fuga?<p>
        @endif
        <label>Cargo:</label><br>
        <select name="cargo_id">
            @forelse($cargo as $item)
                @if($item->id === $cargo_id)
                    <option value="{{$item->id}}" selected>{{$item->descricao}}</option>
                @else
                    <option value="{{$item->id}}">{{$item->descricao}}</option>
                @endif
            @empty
                <option disabled>Nenhum cargo cadastrado</option>
            @endforelse
        </select><p>
        <label>Selecione a Sala:</label><br>
        <select name="sala_id" id="sala_id">
            @forelse($sala as $item)
                <option value="{{$item->id}}">{{$item->descricao}}</option>
            @empty
                <option disabled>Nenhuma sala cadastrada!</option>
            @endforelse
        </select><p>
        <label>Selecione o Líder de Fuga Responsável:</label><br>
        <select name="lider_responsavel" id="lider_responsavel">
            @forelse($usuarios as $item)
                <option value="{{$item->nome}}">{{$item->nome}}</option>
            @empty
                <option disabled>Nenhuma líder de fuga cadastrado!</option>
            @endforelse
        </select><p>
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
        </select><p>
        <div class="form">
            <label>Senha:</label><br>
            <input type="password" name="senha" value="{{$senha}}"><p>
        </div>
        <label>Imagem Atual:</label><br>
        <img width="85" src="/imagens/{{$imagem}}"/><p>
        <label>Selecione a Nova Imagem:</label><br>
        <input type="file" name="novaImagem" value="novaImagem" id="novaImagem"><p>
        <input type="submit" value="Salvar Alterações">
@endsection