<?php
namespace App\Kipedreiro\Controllers;

use App\Kipedreiro\Models\Usuario;
use App\Kipedreiro\Database\Database;
use App\Kipedreiro\Core\View;

class UsuarioController{
    public $usuario;
    public $db;
    public function __construct() {
        $this->db = Database::getInstance();
       $this->usuario = new Usuario($this->db);
    }
    // index
    public function index(){
        $resultado = $this->usuario->buscarUsuarios();
        var_dump($resultado);
    }

    public function viewListarUsuarios(){
        $dados = $this->usuario->buscarUsuarios();
        View::render("usuario/index", ["usuarios" => $dados]);
    }

        public function viewCriarUsuarios(){
        View::render("usuario/create");
    }
        public function viewEditarUsuarios(){
        View::render("usuario/edit");
    }
        public function viewExcluirUsuarios(){
        View::render("usuario/delete");
    }

    public function salvarUsuario(){
        echo "Salvar Usuario";
    }

}