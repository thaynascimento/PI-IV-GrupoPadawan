<html>
    <head>
        <title>Edição de Cargos</title>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados do cargo:</h2>
            <form method="post" action="<?php echo e(route('cargos.update', ['id' => $id])); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="_method" value="PUT">
                <div class="form">
                    <label>Identificação do Cargo:</label><br>
                    <input type="text" name="descricao" value="<?php echo e($descricao); ?>"><p>
                </div>
                <label for="ativo">Status: </label><br>
                <select name="ativo" id="ativo" value="<?php echo e($ativo); ?>">
                    <?php if($ativo == 1): ?>{
                    <option value="1" id="ativo" selected>Ativo</option>
                    <option value="0" id="ativo">Inativo</option>
                    }<?php else: ?>{
                    <option value="1" id="ativo" >Ativo</option>
                    <option value="0" id="ativo" selected>Inativo</option>
                    }
                    <?php endif; ?>
                </select><p>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>