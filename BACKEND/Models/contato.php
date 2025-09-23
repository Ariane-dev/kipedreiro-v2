<?php
namespace App\Kipedreiro\Models;
/*
função é um bloco { } de código que pode ser reutilizado
e pode receber (parametros)
e ele fica esperando ser chamado
*/

/* Executa uma instrução preparada passando um array de valores */
function buscaUsuario($db){
    $sql = 'SELECT id_contato, nome_contato, telefone_contato, email_contato, mensagem_contato FROM tbl_contato';
    $statement = $db->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    $statement->execute();
    return $resultado = $statement->fetchAll();
}

function buscarUsuarioPorId($db, $id){
    $sql = 'SELECT id_contato, nome_contato, telefone_contato, email_contato, mensagem_contato FROM tbl_contato WHERE id_contato = :id';
    $statment = $db->prepare($sql);
    $statment->bindParam(':id', $id);
    return $statment->execute();
}

function registrarUsuario($db, $nome, $email){
    $sql = 'INSERT INTO tbl_contato (nome_contato, email_contato, telefone_contato, mensagem_contato)
    VALUES (:nome, :email, :telefone, :mensagem)';
    $statment = $db->prepare($sql);
    $statment->bindParam(':nome', $nome);
    $statment->bindParam(':email', $email);
    $statment->bindParam(':telefone', $telefone);
    $statment->bindParam(':mensagem', $mensagem);
    return $statment->execute();
}

// $ok = registrarUsuario($db, 'Ari', 'Ari2@xxx.com', '123456');
// echo $ok;
// $resultado = buscaUsuario($db);
// var_dump($resultado);