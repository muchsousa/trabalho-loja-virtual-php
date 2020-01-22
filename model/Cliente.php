<?php

class Cliente {

    public $id;
    public $nome;
    public $email;

    public function __construct($id, $nome, $email) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
    }

    public static function logar($email, $senha) {

        $query = DB::conn()->prepare('SELECT * FROM cliente WHERE email = ?');
        $query->bindParam(1, $email);
        $query->execute();

        if ($query->rowCount() > 0) {
            $pessoa = $query->fetch(PDO::FETCH_OBJ);

            if (password_verify($senha, $pessoa->senha))
                return new Cliente($pessoa->id, $pessoa->nome, $pessoa->email);
        }

        return false;
    }

    public static function cadastraCliente($nome, $email, $senha) {

        if ($nome != '' && $email != '' && $senha != '') {

            $senha = crypt($senha, ''); // criptografa a senha

            $query = DB::conn()->prepare('INSERT INTO cliente (nome, email, senha) VALUES (?, ?, ?)');
            $query->bindParam(1, $nome);
            $query->bindParam(2, $email);
            $query->bindParam(3, $senha);

            return $query->execute();
        }

        return false;
    }


}
