<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Página de Cargos</title>
    </head>
    <body>
        <div id="main">
            <p>
                <a href="<?php echo e(URL::to('http://pi-iv-grupopadawan.app/cargos/create')); ?>">Cadastrar Novo Cargo</a>
            </p>
            <table border="1">
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
                            <a href="<?php echo e(route('cargos.edit', ['id' => $item->id])); ?>">Editar</a>
                        </td>
                        <td>
                            <form method="post" action="<?php echo e(route('cargos.destroy',['id' => $item->id])); ?>">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">Deletar</button>
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
        </div>
    </body>
</html>
