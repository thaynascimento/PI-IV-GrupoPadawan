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
                <label>Selecione a Localização:</label><br>
                <select name="localizacao_id" id="localizacao_id">
                    <?php $__empty_1 = true; $__currentLoopData = $localizacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->descricao); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <option disabled>Nenhuma localização cadastrada!</option>
                    <?php endif; ?>
                </select><p>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>