<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once __DIR__ ."/repository/FilmesRepositoryPDO.php";

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];



if ($rota === "/"){
    require_once __DIR__ ."/view/galeria.php";
    exit();
}

if ($rota === "/novo"){
    if($metodo == "GET") require_once __DIR__ . "/view/cadastrar.php";
    if($metodo == "POST") {
        $controller = new FilmesController();
        $controller->save($_REQUEST);
    };
    exit();
}

if (substr($rota, 0, strlen("/favoritar")) === "/favoritar") {
    $controller = new FilmesController();
    $controller->favorite(basename($rota));
    exit();
}

if (substr($rota, 0, strlen("/filmes")) === "/filmes") {
    if($metodo == "GET") require_once __DIR__ ; "/view/galeria.php";
    if($metodo == "DELETE"){
        $controller = new FilmesController();
        $controller->delete(basename($rota));
    } 
    exit();
}

require_once __DIR__ . "/view/404.php";
?>
</body>
</html>
