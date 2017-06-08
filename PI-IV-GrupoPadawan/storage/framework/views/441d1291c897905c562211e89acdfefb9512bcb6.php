<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Página de Andares</title>
        <link rel="stylesheet" type="text/css" href="../../css/app.css"/>
    </head>
    <body>
        <div id="main">
            <p>
                <a href="<?php echo e(URL::to('http://pi-iv-grupopadawan.app/andares/create')); ?>">Cadastrar Novo Andar</a>
            </p>
            <table border="1">
                <thead>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Ativo</th>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $andares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($item->id); ?></td>
                            <td><?php echo e($item->descricao); ?></td>
                            <td><?php echo e($item->ativo); ?></td>
                            <td>
                                <a href="<?php echo e(route('andares.edit', ['id' => $item->id])); ?>">Editar</a>
                            </td>
                            <td>
                                <form method="post" action="<?php echo e(route('andares.destroy',['id' => $item->id])); ?>">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="9">Nenhum andar encontrado!</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
