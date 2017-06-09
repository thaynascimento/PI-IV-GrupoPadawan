@extends('layouts.main')
@section('titulo', 'Cadastro de Rota de Fuga')
@section('conteudo')
    <h3><strong>Informe abaixoos dados da rota de fuga:</strong></h3>
    <form method="post" class="table table-hover" action="{{route('rotafugas.store')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form">
            <label>Nome da Rota de Fuga:</label><br>
            <input type="text" name="descricao" placeholder="Informe o nome do ponto de fuga"><p>
        </div><p>
        <label>Selecione a Sala:</label><br>
        <select name="sala_id" id="sala_id">
            @forelse($salas as $item)
                <option value="{{$item->id}}">{{$item->descricao}}</option>
            @empty
                <option disabled>Nenhuma rota de fuga cadastrado!</option>
            @endforelse
        </select><p>
        <label>Selecione a Imagem:</label><br>
        <input type="file" name="imagem" value="imagem" id="imagem"><p>
        <input type="submit" value="Cadastrar">
    </form>
@endsection