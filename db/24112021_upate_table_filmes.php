<?php

$db = new PDO('mysql:host=localhost;dbname=filmes', "root", "root");

$sql = "ALTER TABLE filmes ADD COLUMN favorito INT DEFAULT 0";

if ($bd->exec($sql)) 
    echo "\ntabela filmes alterada com sucesso\n"; 
else
    echo "\nerro ao alterar tabela filmes\n"; 