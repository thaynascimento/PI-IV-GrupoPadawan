<html>
    <head>
        <title>Cadastro de Usuários</title>
    </head>
    <body>
        <div>
            <h2>Informe abaixo os dados do usuário:</h2>
            <form method="post" action="<?php echo e(route('usuarios.store')); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form">
                    <label>Usuário:</label><br>
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
                    <input type="text" name="telefone" placeholder="Informe o telefone"><p>
                </div>
                <input type="checkbox" name="lider_de_fuga" value="lider_de_fuga">Líder de Fuga?<p>
                <label>Cargo:</label><br>
                <select name="cargo_id" id="cargo_id">
                    <?php $__empty_1 = true; $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->descricao); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <option disabled>Nenhum cargo cadastrado!</option>
                    <?php endif; ?>
                </select><p>
                <div class="form">
                    <label>Senha:</label><br>
                    <input type="password" name="senha" placeholder="******"><p>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>