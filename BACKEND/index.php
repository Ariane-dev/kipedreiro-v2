<?php
namespace App\Kipedreiro;
require __DIR__.'/../vendor/autoload.php';
use App\Kipedreiro\Controllers\usuarioController;
 
// var_dump($_SERVER["REQUEST_URI"]);
// echo "\n\n\n\n";
// var_dump($_SERVER["REQUEST_METHOD"]);
// exit;
if($_SERVER["REQUEST_URI"] == "/backend/buscarusuario" && $_SERVER["REQUEST_METHOD"] == "GET" ){
    $controller = new usuarioController();
    $resultado = $controller->index();
    var_dump($resultado);
}else{
    echo "Rota não encontrada";
}