<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" type="text/css">

    <title>Detalhes do Produto - Loja Virtual</title>
</head>
<body>

<?php include 'partials/header.php'; ?>

<section id="section-produto" class="container mt-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $produto->titulo; ?></li>
        </ol>
    </nav>

    <div class="row">

        <div class="col-md-5">
            <img src="<?php echo $produto->imagem; ?>" class="card-img-top" alt="">
        </div>

        <div class="col-md-7 product-details">
            <h1 class="h1-title"><?php echo $produto->titulo; ?></h1>

            <h3 class="product-price">R$ <?php echo number_format($produto->valor, 2, ',', '.'); ?></h3>

            <a href="./?page=adicionar-carrinho&id=<?php echo $produto->id; ?>" class="btn btn-outline-success">Comprar</a>
        </div>

    </div>

    <div class="row">

        <div class="col-md-12 descricao">
            <h4>Descrição</h4>

            <p>
                <?php echo utf8_encode($produto->detalhes); ?>
            </p>

        </div>

    </div>
</section>

<?php include 'partials/footer.php'; ?>

</body>
</html>