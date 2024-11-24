<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar um Produto</title>
</head>
<body>
    <h2>Editar Produto</h2>
    <form action="<?php echo e(route('produtos.update', $produto->id)); ?>" method="POST">
        <?php echo csrf_field(); ?> <!-- Token CSRF -->
        <?php echo method_field('PUT'); ?> <!-- Método PUT para atualização -->

        <label for="nome">Nome</label><br/>
        <input type="text" id="nome" name="nome" value="<?php echo e($produto->nome); ?>" required><br/>

        <label for="custo">Custo</label><br/>
        <input type="number" id="custo" name="custo" value="<?php echo e($produto->custo); ?>" required><br/>

        <label for="preco">Preço</label><br/>
        <input type="number" id="preco" name="preco" value="<?php echo e($produto->preco); ?>" required><br/>

        <label for="quantidade">Quantidade</label><br/>
        <input type="number" id="quantidade" name="quantidade" value="<?php echo e($produto->quantidade); ?>" required><br/>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\crud_basico\resources\views/produtos/edit.blade.php ENDPATH**/ ?>