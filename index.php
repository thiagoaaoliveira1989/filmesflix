
<?php
require_once __DIR__ ."/repository/FilmesRepositoryPDO.php";
require_once __DIR__ . "/view/404.php";

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



