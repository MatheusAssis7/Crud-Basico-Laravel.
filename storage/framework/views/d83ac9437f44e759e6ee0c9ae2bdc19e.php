<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
    <style>
        .product-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .product-card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            transform: translateY(-3px);
        }
        .product-info {
            font-size: 0.9em;
            color: #6c757d;
        }
        .product-actions a, .product-actions button {
            margin-right: 5px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pedidos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo e(route('pedidos.index')); ?>">Listar Pedidos</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('pedidos.create')); ?>">Criar Pedido</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProducts" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownProducts">
                            <li><a class="dropdown-item" href="<?php echo e(route('produtos.index')); ?>">Listar Produtos</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('produtos.create')); ?>">Adicionar Produto</a></li>
                        </ul>
                    </li>
                </ul>
                <form action="<?php echo e(route('logout')); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4">Lista de Produtos</h1>
        <a href="<?php echo e(route('produtos.create')); ?>" class="btn btn-primary mb-3">Adicionar Novo Produto</a>

        <?php if(session('success')): ?>
        <div id="success-message" class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>

        <div class="row">
            <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="product-card">
                    <h5 class="card-title"><?php echo e($produto->nome); ?></h5>
                    <p class="product-info">ID: <?php echo e($produto->id); ?></p>
                    <p class="product-info">Custo: <?php echo e(number_format($produto->custo, 2, ',', '.')); ?> R$</p>
                    <p class="product-info">Preço: <?php echo e(number_format($produto->preco, 2, ',', '.')); ?> R$</p>
                    <p class="product-info">Quantidade: <?php echo e($produto->quantidade); ?></p>
                    <div class="product-actions mt-3">
                        <a href="<?php echo e(route('produtos.show', $produto->id)); ?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="<?php echo e(route('produtos.edit', $produto->id)); ?>" class="btn btn-warning btn-sm">Editar</a>
                        <form action="<?php echo e(route('produtos.destroy', $produto->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <script>
        setTimeout(function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 5000);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>

</html>
<?php /**PATH C:\Users\pedro\Desktop\crud_basico\resources\views/produtos/index.blade.php ENDPATH**/ ?>