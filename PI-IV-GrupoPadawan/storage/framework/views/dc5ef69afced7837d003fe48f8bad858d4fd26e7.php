<html>
    <head>
        <title>Edição de Usuários</title>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados do usuário:</h2>
            <form method="post" action="<?php echo e(route('usuarios.update', ['id' => $id])); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="_method" value="PUT">
                <div class="form">
                    <label>Usuário:</label><br>
                    <input type="text" name="nome" value="<?php echo e($nome); ?>"><p>
                </div>
                <div class="form">
                    <label>Centro de Custo:</label><br>
                    <input type="text" name="centro_custo" value="<?php echo e($centro_custo); ?>"><p>
                </div>
                <div class="form">
                    <label>E-mail:</label><br>
                    <input type="text" name="email" value="<?php echo e($email); ?>"><p>
                </div>
                <div class="form">
                    <label>Telefone:</label><br>
                    <input type="text" name="telefone" value="<?php echo e($telefone); ?>"><p>
                </div>
                <?php if($lider_de_fuga == 1): ?>
                    <input type="checkbox" name="lider_de_fuga" value="lider_de_fuga" checked>Líder de Fuga?<p>
                <?php else: ?>
                    <input type="checkbox" name="lider_de_fuga" value="lider_de_fuga">Líder de Fuga?<p>
                <?php endif; ?>
                <label>Cargo:</label><br>
                <select name="cargo_id">
                    <?php $__empty_1 = true; $__currentLoopData = $cargo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if($item->id === $cargo_id): ?>
                            <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->descricao); ?></option>
                        <?php else: ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->descricao); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <option disabled>Nenhum cargo cadastrado</option>
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
                <div class="form">
                    <label>Senha:</label><br>
                    <input type="password" name="senha" value="<?php echo e($senha); ?>"><p>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>