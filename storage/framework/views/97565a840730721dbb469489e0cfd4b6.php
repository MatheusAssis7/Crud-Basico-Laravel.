<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <!-- Link do CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Produtos</h1>
        <a href="<?php echo e(route('produtos.create')); ?>" class="btn btn-primary mb-3">Adicionar Novo Produto</a>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Custo</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($produto->id); ?></td>
                        <td><?php echo e($produto->nome); ?></td>
                        <td><?php echo e($produto->custo); ?></td>
                        <td><?php echo e($produto->preco); ?></td>
                        <td><?php echo e($produto->quantidade); ?></td>
                        <td>
                            <a href="<?php echo e(route('produtos.show', $produto->id)); ?>" class="btn btn-info btn-sm">Ver</a>
                            <a href="<?php echo e(route('produtos.edit', $produto->id)); ?>" class="btn btn-warning btn-sm">Editar</a>
                            
                            <!-- Exclusão via Formulário -->
                            <form action="<?php echo e(route('produtos.destroy', $produto->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <!-- Script do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\crud_basico\resources\views/produtos/index.blade.php ENDPATH**/ ?>