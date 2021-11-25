<?php

    $db = new PDO('mysql:host=localhost;dbname=filmes', "root", "root");

    $sql= "ALTER TABLE filmes ADD COLUMN favorito INT DEFAULT 0";
    if($db->exec($sql))
        echo "\nTabela de Filmes Alterada com Sucesso\n";
