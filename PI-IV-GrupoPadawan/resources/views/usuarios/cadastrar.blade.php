@extends('layouts.main')
@section('titulo', 'Cadastro de Usuário')
@section('conteudo')
    <h3><strong>Informe abaixo os dados do usuário:</strong></h3>
    <form method="post" class="table table-hover" action="{{route('usuarios.store')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form">
            <label>Nome:</label><br>
            <input type="text" name="nome" placeholder="Informe o nome"><p>
        </div>
        <div class="form">
            <label>Centro de Custo:</label><br>
            <input type="text" name="centro_custo" placeholder="Informe o centro de custo"><p>
        </div>
        <div class="form">
            <label>E-mail:</label><br>
            <input type="text" name="email" placeholder="Informe o e-mail"><p>
        </div>
        <div class="form">
            <label>Telefone:</label><br>
            <input type="text" name="telefone" maxlength="9" placeholder="Informe o telefone"><p>
        </div>
        <input type="checkbox" name="lider_de_fuga" value="lider_de_fuga">Líder de Fuga?<p>
        <label>Cargo:</label><br>
        <label>Selecione o Cargo:</label><br>
        <select name="cargo_id" id="cargo_id">
            @forelse($cargos as $item)
                <option value="{{$item->id}}">{{$item->descricao}}</option>
            @empty
                <option disabled>Nenhum cargo cadastrado!</option>
            @endforelse
        </select><p>
        <label>Selecione a Sala:</label><br>
        <select name="sala_id" id="sala_id">
            @forelse($salas as $item)
                <option value="{{$item->id}}">{{$item->descricao}}</option>
            @empty
                <option disabled>Nenhuma rota de fuga cadastrado!</option>
            @endforelse
        </select><p>
        <label>Selecione o Líder de Fuga Responsável:</label><br>
        <select name="lider_responsavel" id="lider_responsavel">
            @forelse($usuarios as $item)
                <option value="{{$item->id}}">{{$item->nome}}</option>
            @empty
                <option disabled>Nenhuma líder de fuga cadastrado!</option>
            @endforelse
        </select><p>
        <div class="form">
            <label>Senha:</label><br>
            <input type="password" name="senha" placeholder="******"><p>
        </div>
        <label>Selecione a Imagem:</label><br>
        <input type="file" name="imagem" value="imagem" id="imagem"><p><p>
        <input type="submit" value="Cadastrar">
@endsection