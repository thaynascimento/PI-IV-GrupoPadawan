<?php $__env->startSection('titulo', 'Página de Usuários'); ?>
<?php $__env->startSection('conteudo'); ?>
    <p>
        <button type="submit" class="btn btn-sm btn-danger">
            <a href="<?php echo e(route('usuarios.create')); ?>">
            <span class="glyphicon glyphicon-plus">Adicionar</span></a>
        </button>
    </p>
    <h3><strong>Listagem de Usuários</strong></h3>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Centro de Custo</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Líder de Fuga?</th>
            <th>Ativo</th>
            <th>Cargo</th>
            <th>Ações</th>
            <th>Ações</th>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->nome); ?></td>
                <td><?php echo e($item->centro_custo); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td><?php echo e($item->telefone); ?></td>
                <td><?php echo e($item->lider_de_fuga); ?></td>
                <td><?php echo e($item->ativo); ?></td>
                <td><?php echo e($item->cargo->descricao); ?></td>
                <td>
                    <a href="<?php echo e(route('usuarios.edit', ['id' => $item->id])); ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                </td>
                <td>
                    <form method="post" action="<?php echo e(route('usuarios.destroy',['id' => $item->id])); ?>">
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
                <td colspan="9">Nenhum usuário encontrado!</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>