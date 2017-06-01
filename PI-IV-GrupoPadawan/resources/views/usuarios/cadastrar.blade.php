<html>
<head>
    <title>Cadastro de Usuários</title>
</head>
<body>
<div class="container">
    <h2>Informe abaixo os dados do usuário:</h2>
    <form method="post" action="{{route('')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form">
            <label>Usuário:</label><br>
            <input type="text" name="usuario" placeholder="Informe o usuário"><p>
        </div>
        <div class="form">
            <label>Senha:</label><br>
            <input type="text" name="senha" placeholder="Informe a senha"><p>
        </div>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>