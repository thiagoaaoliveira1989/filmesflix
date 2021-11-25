<?php

class Conexao{
    public static function criar():PDO{
        return new PDO('mysql:host=localhost;dbname=filmes', 'root', 'root');
    }
}

?>