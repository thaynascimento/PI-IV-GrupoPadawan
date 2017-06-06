<html>
    <head>
        <title>Cadastro de Andares</title>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados do andar:</h2>
            <form method="post" action="<?php echo e(route('andares.update', ['id' => $id])); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="_method" value="PUT">
                <div class="form">
                    <label>Identificação do Andar:</label><br>
                    <input type="text" name="descricao" value="<?php echo e($descricao); ?>"><p>
                </div>
                <select name="localizacao_id">
                    <?php $__empty_1 = true; $__currentLoopData = $localizacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if($item->id === $localizacao_id): ?>
                            <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->descricao); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->descricao); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <option disabled>Nenhuma localização cadastrado</option>
                    <?php endif; ?>
                </select><p>
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