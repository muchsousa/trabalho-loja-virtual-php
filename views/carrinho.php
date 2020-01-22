<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" type="text/css">

    <title>Carrinho de Compras - Loja Virtual</title>
</head>
<body>

<?php include 'partials/header.php'; ?>


<section id="carrinho" class="container">
    <h2 class="h2-title">Carrinho de Compras</h2>

    <?php if(count($carrinho->getProdutos()) == 0): ?>

    <div class="carrinho-vazio">
        <h5>Seu Carrinho de compras está vazio</h5>

        <a href="./" class="btn btn-success text-light">Continuar Comprando</a>
    </div>

    <?php else: ?>

    <div class="carrinho">

        <ul class="list-group">

            <?php foreach ($carrinho->getProdutos() as $produto): ?>

                <li class="list-group-item d-flex flex-column flex-md-row align-items-center">
                    <div class="col-md-3">
                        <img src="<?php echo $produto->imagem; ?>" width="100%" 3alt="">
                    </div>

                    <div class="col-md-6">
                        <h3 class="titulo-produto"><?php echo $produto->titulo; ?></h3>

                        <div class="quantidade">
                            <a href="./?page=diminuir-carrinho&id=<?php echo $produto->id; ?>" class="btn btn-sm btn-warning">-</a>
                            <input disabled value="<?php echo $produto->qtd; ?>">
                            <a href="./?page=adicionar-carrinho&id=<?php echo $produto->id; ?>" class="btn btn-sm btn-primary">+</a>
                        </div>

                        <a href="./?page=remover-carrinho&id=<?php echo $produto->id; ?>" class="btn btn-sm btn-outline-danger">Remover</a>
                    </div>

                    <div class="col-md-3">
                        <h5 class="valor-unitario">R$ <?php echo number_format($produto->valor, 2, ',', '.'); ?></h5>
                        <h3 class="sub-total">R$ <?php echo number_format(($produto->valor * $produto->qtd), 2, ',', '.'); ?></h3>
                    </div>

                </li>

            <?php endforeach; ?>

        </ul>

        <h3 class="total">Total: R$ <?php echo number_format($carrinho->totalCarrinho(), 2, ',', '.'); ?></h3>

        <a href="./?page=finalizar-compra" class="btn btn-success text-light finalizar-compra">Finalizar Compra</a>

    </div>

    <?php endif; ?>

</section>


<?php include 'partials/footer.php'; ?>

</body>
</html>