<?php $__env->startSection('titulo', 'Cadastro de Usuário'); ?>
<?php $__env->startSection('conteudo'); ?>
    <h3><strong>Informe abaixo os dados do usuário:</strong></h3>
    <form method="post" class="table table-hover" action="<?php echo e(route('usuarios.store')); ?>" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="form">
            <label>Nome:</label><br>
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
            <input type="text" name="telefone" maxlength="9" placeholder="Informe o telefone"><p>
        </div>
        <input type="checkbox" name="lider_de_fuga" value="lider_de_fuga">Líder de Fuga?<p>
        <label>Cargo:</label><br>
        <label>Selecione o Cargo:</label><br>
        <select name="cargo_id" id="cargo_id">
            <?php $__empty_1 = true; $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->descricao); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <option disabled>Nenhum cargo cadastrado!</option>
            <?php endif; ?>
        </select><p>
        <label>Selecione a Sala:</label><br>
        <select name="sala_id" id="sala_id">
            <?php $__empty_1 = true; $__currentLoopData = $salas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->descricao); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <option disabled>Nenhuma rota de fuga cadastrado!</option>
            <?php endif; ?>
        </select><p>
        <label>Selecione o Líder de Fuga Responsável:</label><br>
        <select name="lider_responsavel" id="lider_responsavel">
            <?php $__empty_1 = true; $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($item->nome); ?>"><?php echo e($item->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <option disabled>Nenhuma líder de fuga cadastrado!</option>
            <?php endif; ?>
        </select><p>
        <div class="form">
            <label>Senha:</label><br>
            <input type="password" name="senha" placeholder="******"><p>
        </div>
        <label>Selecione a Imagem:</label><br>
        <input type="file" name="imagem" value="imagem" id="imagem"><p><p>
        <input type="submit" value="Cadastrar">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>