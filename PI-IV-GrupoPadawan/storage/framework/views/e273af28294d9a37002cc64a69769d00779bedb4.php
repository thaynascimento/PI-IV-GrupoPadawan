<?php $__env->startSection('titulo', 'Cadastro de Cargo'); ?>
<?php $__env->startSection('conteudo'); ?>
    <h3><strong>Informe abaixo os dados do cargo:</strong></h3>
    <form method="post" action="<?php echo e(route('cargos.store')); ?>">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="form">
            <label>Nome do Cargo:</label><br>
            <input type="text" name="descricao" placeholder="Informe o nome do cargo"><p>
        </div>
        <input type="submit" value="Cadastrar">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>