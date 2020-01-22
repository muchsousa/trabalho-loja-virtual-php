<?php


function __autoload($class_name) {
    require_once "../model/{$class_name}.php";
}

session_start();

$carrinho = new Carrinho();

// Router / Controller
$paginas = [
    'produto', 'carrinho', 'entrar', 'cadastro', 'recibo-compra'
];

$actions = [
    'finalizar-compra',
    'adicionar-carrinho', 'diminuir-carrinho', 'remover-carrinho',
    'fazer-login', 'fazer-cadastro', 'fazer-logout'
];

if(!isset($_GET['page']) || $_GET['page'] == '') {

    $produtos = Produto::getDestaques();

    require '../views/home.php';

} else {

    if(isset($_GET['page']) && in_array($_GET['page'], $actions)) {

        // Adiciona um Produto ao Carrinho
        if ($_GET['page'] == 'adicionar-carrinho') {
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {

                $produto = Produto::get($_GET['id']);

                // insere no carrinho
                if ($produto)
                    $carrinho->adicionaProduto($produto);
            }

            header('Location: ./?page=carrinho');
        }

        // Diminui a quantidade de um Produto do Carrinho
        if ($_GET['page'] == 'diminuir-carrinho') {
            if (isset($_GET['id']) && is_numeric($_GET['id']))
                $carrinho->diminuiQuantidade($_GET['id']);

            header('Location: ./?page=carrinho');
        }

        // Remove um Produto do Carrinho
        if ($_GET['page'] == 'remover-carrinho') {
            if (isset($_GET['id']) && is_numeric($_GET['id']))
                $carrinho->removeProduto($_GET['id']);

            header('Location: ./?page=carrinho');
        }

        // Finaliza a compra
        if ($_GET['page'] == 'finalizar-compra') {

            if(!isset($_SESSION['autenticado'])) {
               $_SESSION['location'] = '/?page=finalizar-compra';

               header('Location: ./?page=entrar');
            } else {
                if (count($_SESSION['carrinho']) == 0) {
                    header('Location: ./');
                } else {

                    $html = '';
                    $html .= '<h1>Recibo de Compra</h1><br>';

                    foreach ($carrinho->getProdutos() as $produto) {
                        $subtotal = number_format(($produto->valor * $produto->qtd), 2, ',', '.');
                        $valorUnitario = number_format($produto->valor, 2, ',', '.');

                        $html .= "<h3>{$produto->titulo}</h3>";
                        $html .= "<h5>Quantidade: {$produto->qtd}</h5>";
                        $html .= "<h4>Valor Unitario: R$ {$valorUnitario}</h4>";
                        $html .= "<h4>Valor Total: R$ {$subtotal}</h4><hr><br>";
                    }

                    $valorTotal = number_format($carrinho->totalCarrinho(), 2, ',', '.');

                    $html .= '<br><br>';
                    $html .= "<h2>Valor da Compra: R$ {$valorTotal}</h2><br>";

                    // envia o email com o recibo
                    $mail = new PHPMailer(true);
                    $mail->IsSMTP();
                    $mail->Host = 'smtp.gmail.com ';
                    $mail->Port = 587;
                    $mail->SMTPSecure = 'tls';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'siarobot2019@gmail.com';
                    $mail->Password = 'si@123456';
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );

                    // destinatário
                    $mail->setFrom('siarobot2019@gmail.com', 'Loja Virtual');

                    // email em si
                    $mail->Subject = 'Recibo de Compra';
                    $mail->msgHTML($html);
                    $mail->addAddress($_SESSION['autenticado']->email);

                    if(!$mail->Send()) {
                        echo '<script>alert("erro ao enviar o recibo por email");location.href="./?page=recibo-compra"</script>';
                    } else {
                        // redireciona para a pagina com o recibo de compra
                        header('Location: ./?page=recibo-compra');
                    }
                }
            }
        }

        // Faz o cadastro
        if ($_GET['page'] == 'fazer-cadastro') {

            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha');

            if (Cliente::cadastraCliente($nome, $email, $senha))
                header('Location: ./?page=entrar');
            else
                header('Location: ./?page=cadastro');
        }

        // Faz login
        if ($_GET['page'] == 'fazer-login') {

            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha');

            if ($cliente = Cliente::logar($email, $senha)) {
                $_SESSION['autenticado'] = $cliente;

                if ($_SESSION['location'])
                    header('Location: ' . $_SESSION['location']);
                else
                    header('Location: ./');
            } else
                header('Location: ./?page=entrar');
        }

        // Faz logout
        if ($_GET['page'] == 'fazer-logout') {
            unset($_SESSION['autenticado']);

            header('Location: ./');
        }
    }

    // Páginas
    if(isset($_GET['page']) && in_array($_GET['page'], $paginas)) {

        // Página de Produto
        if ($_GET['page'] == 'produto' && isset($_GET['id'])) {
            if (is_numeric($_GET['id'])) {
                $produto = Produto::get($_GET['id']);
            } else
                header('Location: ./');
        }

        include "../views/{$_GET['page']}.php";

    } else { // página não encontrada
        include "../views/404.php";
    }

}


