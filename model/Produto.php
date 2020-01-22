<?php

class Produto {

    public $id;
    public $titulo;
    public $detalhes;
    public $qtd;
    public $valor;
    public $imagem;

    public function __construct($id = '', $titulo = '', $valor = '', $detalhes = '', $imagem = '') {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->detalhes = $detalhes;
        $this->valor = $valor;
        $this->imagem = $imagem;

        $this->qtd = 1;
    }

    public static function get($id) {

        $query = DB::conn()->prepare('SELECT * FROM produto WHERE id = ?');
        $query->bindParam(1, $id);
        $query->execute();

        if ($query->rowCount() > 0) {
            $produto = $query->fetch(PDO::FETCH_OBJ);

            return new Produto($id, $produto->titulo, $produto->valor, $produto->detalhes, $produto->imagem);
        }

        return false;
    }

    public static function getDestaques() {

        $query = DB::conn()->prepare('SELECT id FROM produto');
        $query->execute();

        $produtos = [];

        if ($query->rowCount() > 0) {

            while ($produto = $query->fetch(PDO::FETCH_OBJ))
                array_push($produtos, Produto::get($produto->id));
        }

        return $produtos;
    }

}