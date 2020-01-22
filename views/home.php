<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" type="text/css">

    <title>Página Inicial - Loja Virtual</title>
</head>
<body>

<?php include 'partials/header.php'; ?>



<div id="page-slider">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://decathlonstore.vteximg.com.br/arquivos/banner-desk-hp-destaque-diadospais-1440x350-2.jpg?v=636995025261300000" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://decathlonstore.vteximg.com.br/arquivos/banner-desk-hp-destaque-liquida-1440x350%20copy.jpg?v=636973498301670000" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://decathlonstore.vteximg.com.br/arquivos/banner-desk-hp-destaque-fit100-1440x350.jpg?v=636982192494500000" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<div id="bottom-slider">

    <div class="container d-flex flex-column flex-md-row p-1 px-md-4">
        <div class="col-md-4">
            <h5>Envio para todo o Brasil</h5>
        </div>

        <div class="col-md-4">
            <h5>Pagamento em até 12x</h5>
        </div>

        <div class="col-md-4">
            <h5>Troca grátis até 30 dias</h5>
        </div>

    </div>

</div>

<section id="produtos-em-destaque" class="container">
    <h2 class="h2-title">Produtos em Destaque</h2>

    <div class="row">

        <?php foreach ($produtos as $produto): ?>

        <div class="col-md-4 product">
            <a href="./?page=produto&id=<?php echo $produto->id; ?>">
                <div class="card mb-4 shadow-sm">
                    <div class="image">
                        <img src="<?php echo $produto->imagem; ?>" class="card-img-top" alt="">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produto->titulo; ?></h5>
                        <h3 class="product-price">R$ <?php echo number_format($produto->valor, 2, ',', '.'); ?></h3>
                    </div>
                </div>
            </a>
        </div>

        <?php endforeach; ?>

    </div>

</section>

<?php include 'partials/footer.php'; ?>

</body>
</html>