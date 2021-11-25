<?php

    $db = new PDO('mysql:host=localhost;dbname=filmes', "root", "root");

    $sql= "DELETE TABLE IF EXISTS filmes";
    if($db->exec($sql))
        echo "\nTabela de Filmes Apagada com Sucesso\n";


    $sql= "CREATE TABLE filmes (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      titulo VARCHAR (200) NOT NULL,
      poster VARCHAR (200),
      sinopse TEXT,
      nota DECIMAL(2,1)
  )";

if($db->exec($sql))
echo "\nTabela Criada com Sucesso\n";
else
echo "\nErro ao Criar Tabela\n";


    
