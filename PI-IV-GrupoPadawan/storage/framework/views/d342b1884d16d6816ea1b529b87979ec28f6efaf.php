<html>
    <head>
        <title>Bem-vindo(a)!</title>
    </head>
    <body>
        <div class="container">
            <h2>Insira os dados para login:</h2>
            <form method="post">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form">
                    <label>Usuário:</label><br>
                    <input type="text" name="usuario" placeholder="Informe o usuário"><p>
                </div>
                <div class="form">
                    <label>Senha:</label><br>
                    <input type="text" name="senha" placeholder="Informe a senha"><p>
                </div>
                <input type="submit" value="Logar">
            </form>
        </div>
    </body>
</html>