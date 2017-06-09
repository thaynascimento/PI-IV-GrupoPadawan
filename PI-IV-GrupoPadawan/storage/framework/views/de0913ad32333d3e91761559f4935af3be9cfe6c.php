<?php $__env->startSection('titulo', 'Edição de Andare'); ?>
<?php $__env->startSection('conteudo'); ?>
    <h3><strong>Informe abaixo os dados do andar:</strong></h3>
    <form method="post" class="table table-hover" action="<?php echo e(route('andares.update', ['id' => $id])); ?>">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="hidden" name="_method" value="PUT">
        <div class="form">
            <label>Identificação do Andar:</label><br>
            <input type="text" name="descricao" value="<?php echo e($descricao); ?>"><p>
        </div>
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
        </select><p><p>
        <input type="submit" value="Salvar Alterações">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>