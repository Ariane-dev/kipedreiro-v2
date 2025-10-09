<?php
namespace App\Kipedreiro\Controllers;

use App\Kipedreiro\Core\FileManager;
use App\Kipedreiro\Models\Usuario;
use App\Kipedreiro\Database\Database;
use App\Kipedreiro\Core\View;
use App\Kipedreiro\Core\Redirect;
use App\Kipedreiro\Validadores\UsuarioValidador;

class UsuarioController{
    public $usuario;
    public $db;
    public $gerenciarImagem;
    public function __construct() {
        $this->db = Database::getInstance();
       $this->usuario = new Usuario($this->db);
       $this->gerenciarImagem = new FileManager('upload');
    }
    
    public function salvarUsuario(){
        $erros = UsuarioValidador::ValidarEntradas($_POST);
        if(!empty($erros)){
            Redirect::redirecionarComMensagem("usuario/criar", "error", implode("<br>", $erros));
        }
        $imagem = $this->gerenciarImagem->salvarArquivo($_FILES['imagem'], 'usuario');
        if($this->usuario->inserirUsuario(
            $_POST["nome_usuario"], 
            $_POST["email_usuario"], 
            $_POST["senha_usuario"], 
            $_POST["tipo_usuario"],
             "Ativo",
             $imagem
             )){
            Redirect::redirecionarComMensagem("usuario/listar", "success", "Usuário cadastrado com sucesso!");
        }else{
            Redirect::redirecionarComMensagem("usuario/criar", "error", "Erro ao cadastrar usuário!");
        }
    }

    // index
    public function index(){
        $resultado = $this->usuario->buscarUsuarios();
        var_dump($resultado);
    }

    public function viewListarUsuarios(){
        $dados = $this->usuario->buscarUsuarios();
        $total = $this->usuario->totalDeUsuarios();
        $inativo = $this->usuario->totalDeUsuariosInativo();
        $ativo = $this->usuario->totalDeUsuariosAtivo();
        View::render("usuario/index", 
        [
            "usuarios" => $dados, 
            "total_usuarios"=> $total[0],
            "total_inativos" => $inativo[0],
            "total_ativos" => $ativo[0]
        ]
        );
    }

    public function viewCriarUsuarios(){
        View::render("usuario/create");
    }
    public function viewEditarUsuarios(int $id){
        $dados = $this->usuario->buscarUsuariosPorID($id);
        foreach($dados as $usuario){
            $dados = $usuario;

        }
        View::render("usuario/edit", ["usuario"=>$dados]);
    }
    public function viewExcluirUsuarios($id){
        View::render("usuario/delete", ["id_usuario"=>$id]);
    }
    public function relatorioUsuario($id, $dataInicial, $dataFinal){
        View::render("usuario/relatorio", 
        ["id"=>$id, "dataInicial"=>$dataInicial, "dataFinal"=>$dataFinal]);
    }

 
    public function atualizarUsuario(){
        echo "atualizar Usuario";
    }
    public function deletarUsuario(){
        echo "deletar Usuario";
    }

}