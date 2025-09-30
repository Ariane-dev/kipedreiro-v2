<?php
namespace App\Kipedreiro\Core;

class View{

    public static function render($nomeView, $dados = []){
        extract($dados);
        require __DIR__ . "/../Views/templates/partials/header.php";
        require __DIR__ . "/../Views/templates/{$nomeView}.php";
        require __DIR__ . "/../Views/templates/partials/footer.php";
    }
}