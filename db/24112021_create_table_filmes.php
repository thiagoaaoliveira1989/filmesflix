<?php

    $db = new SQLite3("filmes.db");

    $sql= "DROP TABLE IF EXISTS filmes";
    
    if($db->exec($sql))
        echo "\nTabela de Filmes Apagada com Sucesso\n";


    $sql= "CREATE TABLE filmes (
      id INTEGER PRIMARY KEY AUTO_INCREMENT,
      titulo VARCHAR (200) NOT NULL,
      poster VARCHAR (200),
      sinopse TEXT,
      nota DECIMAL(3,1),
      favorito INT DEFAULT 0
  )";

if($db->exec($sql))
echo "\nTabela Criada com Sucesso\n";
else
echo "\nErro ao Criar Tabela\n";


    
