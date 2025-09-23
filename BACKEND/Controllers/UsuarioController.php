<?php
namespace App\Kipedreiro\Controllers;

use App\Kipedreiro\Models\usuario;
use App\Kipedreiro\Database\Database;

class UsuarioController{
    public $usuario;
    public $db;
    public function __construct() {
        $this->db == Database::getInstance();
       $this->usuario = new usuario($this->db);
    }
    // index
    public function index(){
        $resultado = $this->usuario->buscarUsuarios();
        return $resultado;
    }

    //registrar

    // login

    // atualizar

    // deletar

    // chamada de api
}