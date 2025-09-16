<?php
include_once 'backend/Database/database.php';
include_once 'backend/Models/contato.php';
//operação ternaria
$nome = $_POST["nome"] ?? '' ;
$email = $_POST["email"] ?? '' ;
$telefone = $_POST["telefone"] ?? '' ;
$mensagem = $_POST["mensagem"] ?? '' ;


$ok = registrarUsuario($db, $nome, $email, $telefone, $mensagem);
if($ok > 0 || $ok === true){
    echo "Contato registrado com sucesso!";
}else{
    echo "Erro ao registrar contato!";
}