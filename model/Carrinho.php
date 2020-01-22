<?php

class Carrinho {

    public function __construct() {
        if (!isset($_SESSION['carrinho']))
            $_SESSION['carrinho'] = [];
    }

    public function getProdutos() {
        return $_SESSION['carrinho'];
    }

    public function totalCarrinho() {
        $total = 0;
        foreach ($_SESSION['carrinho'] as $produto)
            $total += $produto->valor * $produto->qtd;

        return $total;
    }

    public function adicionaProduto($produto) {
        if (isset($_SESSION['carrinho'][$produto->id]))
            $_SESSION['carrinho'][$produto->id]->qtd++;
        else
            $_SESSION['carrinho'][$produto->id] = $produto;
    }

    public function diminuiQuantidade($id) {
        if ($_SESSION['carrinho'][$id]) {
            if ($_SESSION['carrinho'][$id]->qtd > 1)
                $_SESSION['carrinho'][$id]->qtd--;
            else
                $this->removeProduto($id);
        }
    }

    public function removeProduto($idProduto) {
        if ($_SESSION['carrinho'][$idProduto])
            unset($_SESSION['carrinho'][$idProduto]);
    }

    public function esvaziarCarrinho() {
        unset($_SESSION['carrinho']);
    }

}