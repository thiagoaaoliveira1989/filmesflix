<?php

$db = new PDO('$databaseType:$database,$user,$pass');

    $sql= "ALTER TABLE filmes ADD COLUMN favorito INT DEFAULT 0";
    if($db->exec($sql))
        echo "\nTabela de Filmes Alterada com Sucesso\n";
