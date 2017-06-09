<?php $__env->startSection('titulo', 'Cadastro de Andar'); ?>
<?php $__env->startSection('conteudo'); ?>
        <h3><strong>Informe abaixo os dados do andar:</strong></h3>
        <form method="post" class="table table-hover" action="<?php echo e(route('andares.store')); ?>">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="form">
                <label>Identificação do Andar:</label><br>
                <input type="text" name="descricao" placeholder="Informe a identificação do andar"><p>
            </div>
            <input type="submit" value="Cadastrar">
        </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>