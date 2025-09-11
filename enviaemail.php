<?php
include_once 'backend/Database/database.php';
include_once 'backend/Usuario.php';
//operação ternaria
$nome = $_POST["nome"] ?? '' ;
$email = $_POST["email"] ?? '' ;
$senha = $_POST["senha"] ?? '' ;


$ok = registrarUsuario($db, $nome, $email, $senha);
if($ok > 0 || $ok === true){
    echo "Usuário registrado com sucesso!";
}else{
    echo "Erro ao registrar usuário!";
}