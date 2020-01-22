
<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4" id="top-header">
    <nav class="my-2 my-md-0 mr-md-3 mr-md-auto">
        <a class="p-2 text-light text-si" href="#">Sobre Nós</a>
        <a class="p-2 text-light" href="#">(12) 3456-7891</a>
        <a class="p-2 text-light" href="#">email@email.com</a>
    </nav>

    <nav class="my-2 my-md-0 mr-md-3">

        <?php if(isset($_SESSION['autenticado'])): ?>

            <span class="p-2 text-light">Olá, <?php echo $_SESSION['autenticado']->nome; ?></span>
            <a class="btn text-light btn-sm" href="./?page=fazer-logout">Logout</a>

        <?php else: ?>

            <a class="btn text-light btn-sm" href="./?page=entrar">Entrar</a>
            <a class="btn text-light btn-sm" href="./?page=cadastro">Cadastrar</a>

        <?php endif; ?>

    </nav>
</div>

<header class="container d-flex flex-column flex-md-row align-items-center p-1 px-md-4 mb-3" id="page-header">

    <div class="col-md-5"></div>

    <div class="col-md-2">
        <h3>Loja Virtual</h3>
    </div>

    <div class="col-md-3"></div>

    <div class="col-md-2">
        <a href="./?page=carrinho" class="btn btn-dark text-light btn-sm float-right" >Carrinho de Compras</a>
    </div>

</header>
<nav id="page-nav">
    <ul class="nav container">
        <li class="nav-item">
            <a class="nav-link" href="./#roupas">Roupas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./#">Calçados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./#">Equipamentos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./#">Feminino</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./#">Masculino</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./#">Infantil</a>
        </li>

        <li class="nav-item">
            <a class="nav-link outlet" href="./#">Outlet</a>
        </li>
    </ul>
</nav>
