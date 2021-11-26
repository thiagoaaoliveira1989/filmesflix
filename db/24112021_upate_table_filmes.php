<?php

$db = new SQLite3("filmes.db");

    $sql= "ALTER TABLE filmes ADD COLUMN favorito INT DEFAULT 0";
    if($db->exec($sql))
        echo "\nTabela de Filmes Alterada com Sucesso\n";
