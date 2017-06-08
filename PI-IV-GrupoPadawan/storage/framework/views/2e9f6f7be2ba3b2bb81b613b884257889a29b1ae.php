<?php $__env->startSection('titulo', 'Página de Cargos'); ?>
<?php $__env->startSection('conteudo'); ?>
    <p>
        <button type="submit" class="btn btn-sm btn-danger">
            <a href="<?php echo e(route('cargos.create')); ?>">
                <span class="glyphicon glyphicon-plus">Adicionar</span></a>
        </button>
    </p>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Descrição</th>
            <th>Ativo</th>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->descricao); ?></td>
                <td><?php echo e($item->ativo); ?></td>
                <td>
                    <a href="<?php echo e(route('cargos.edit', ['id' => $item->id])); ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <form method="post" action="<?php echo e(route('cargos.destroy',['id' => $item->id])); ?>">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="9">Nenhum cargo encontrado!</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>