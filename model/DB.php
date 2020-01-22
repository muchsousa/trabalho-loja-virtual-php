<?php

class DB {

    public static function conn() {
        return new PDO("mysql:host=db:3306;dbname=trabalho", 'root', 'abcd1234');
    }

}