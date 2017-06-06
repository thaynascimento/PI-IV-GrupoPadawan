<html>
    <head>
        <title>Cadastro de Andares</title>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados do andar:</h2>
            <form method="post" action="<?php echo e(route('andares.store')); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form">
                    <label>Identificação do Andar:</label><br>
                    <input type="text" name="descricao" placeholder="Informe a identificação do andar"><p>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>