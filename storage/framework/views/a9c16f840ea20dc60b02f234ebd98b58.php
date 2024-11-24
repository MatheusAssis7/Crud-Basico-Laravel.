<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Pedido</title>
    <!-- Link do Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-...your-integrity-hash..." crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalhes do Pedido</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>Cliente:</strong> <?php echo e($pedido->cliente); ?></p>
                <p><strong>Produto:</strong> <?php echo e($pedido->produto); ?></p>
                <p><strong>Quantidade:</strong> <?php echo e($pedido->quantidade); ?></p>
                <p><strong>Preço:</strong> R$ <?php echo e(number_format($pedido->preco, 2, ',', '.')); ?></p>

                <a href="<?php echo e(route('pedidos.index')); ?>" class="btn btn-secondary">Voltar</a>
                <a href="<?php echo e(route('pedidos.edit', $pedido->id)); ?>" class="btn btn-warning">Editar</a>

                <form action="<?php echo e(route('pedidos.destroy', $pedido->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha384-...your-integrity-hash..." crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\Users\pedro\Desktop\crud_basico\resources\views/pedidos/show.blade.php ENDPATH**/ ?>