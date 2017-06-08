<html>
    <head>
        <title>Cadastro de Localizações</title>
        <link rel="stylesheet" type="text/css" href="../../css/app.css"/>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados da localização:</h2>
            <form method="post" action="<?php echo e(route('localizacoes.store')); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form">
                    <label>Nome da Localização:</label><br>
                    <input type="text" name="descricao" placeholder="Informe o nome do prédio"><p>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>