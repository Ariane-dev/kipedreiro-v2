<?php
namespace App\Kipedreiro;
require __DIR__. '/../vendor/autoload.php';

use  App\Kipedreiro\Controllers\UsuarioController;

$controller = new UsuarioController();
$resultado = $controller->index();
var_dump($resultado);