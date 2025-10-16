<?php 
namespace App\Kipedreiro\Controllers\Admin;
use App\Kipedreiro\Core\Redirect;

abstract class PedreiroController extends AuthenticatedController{
    public function __construct(){
        parent::__construct();
        if ($this->session->get('usuario_tipo') !== 'Pedreiro'){
            Redirect::redirecionarComMensagem(
                'admin/dashboard',
                'error',
                'Você precisa estar logado para acessar esta página '
            );
        }
        
    }
}
