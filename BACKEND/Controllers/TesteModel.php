<?php
use App\Kipedreiro\Models\Usuario;
require_once __DIR__.'/../Models/Usuario.php';
require_once __DIR__.'/../Database/Database.php';

$usuario = new Usuario($db);
// $resultado = $usuario->buscarUsuarios();
// $resultado = $usuario->buscarUsuariosPorEmail('malu@xxxxx.com');
$resultado=$usuario ->excluirUsuario(1);
var_dump($resultado);
