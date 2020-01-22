<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" type="text/css">

    <title>Entrar - Loja Virtual</title>
</head>
<body>

<?php include 'partials/header.php'; ?>

<section id="carrinho" class="container">

    <div class="row">
        <div class="col-md-6">

            <h5 style="text-align: left;" class="mb-3">Fazer Login</h5>

            <form action="./?page=fazer-login" method="post">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
                    </div>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Senha</span>
                    </div>
                    <input type="password" class="form-control" name="senha">
                </div>

                <button type="submit" class="btn btn-success" style="float: right">Entrar</button>
            </form>
        </div>

        <div class="col-md-6">
            <h5>Ainda não tem cadastro?</h5>

            <a href="./?page=cadastro" class="btn btn-success text-light">Cadastre-se</a>
        </div>

    </div>


</section>

<?php include 'partials/footer.php'; ?>

</body>
</html>