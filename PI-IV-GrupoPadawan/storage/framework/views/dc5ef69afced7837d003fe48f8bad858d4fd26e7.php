<?php $__env->startSection('titulo', 'Edição de Usuário'); ?>
<?php $__env->startSection('conteudo'); ?>
    <h3><strong>Informe abaixo os dados do usuário:</strong></h3>
    <form method="post" class="table table-hover" action="<?php echo e(route('usuarios.update', ['id' => $id])); ?>" enctype="multipart/form-data">
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
        <?php if($lider_de_fuga == 'Sim'): ?>
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
        <label>Selecione a Sala:</label><br>
        <select name="sala_id" id="sala_id">
            <?php $__empty_1 = true; $__currentLoopData = $sala; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->descricao); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <option disabled>Nenhuma sala cadastrada!</option>
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
        <label for="ativo">Status: </label><br>
        <select name="ativo" id="ativo" value="<?php echo e($ativo); ?>">
            <?php if($ativo == 'Sim'): ?>{
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
        <label>Imagem Atual:</label><br>
        <img width="85" src="/imagens/<?php echo e($imagem); ?>"/><p>
        <label>Selecione a Nova Imagem:</label><br>
        <input type="file" name="novaImagem" value="novaImagem" id="novaImagem"><p>
        <input type="submit" value="Salvar Alterações">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>