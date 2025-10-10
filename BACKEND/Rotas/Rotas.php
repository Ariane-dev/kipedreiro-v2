<?php

namespace App\Kipedreiro\Rotas;

class Rotas
{
    public static function get()
    {
    return [
    "GET" => [
       // O caminho da url   O nome do controller que e o metodo do controller
       "/usuarios" => "UsuarioController@index",
       "/usuario/criar" => "UsuarioController@viewCriarUsuarios",
       "/usuario/listar/{pagina}" => "UsuarioController@viewListarUsuarios",
        "/usuario/editar/{id}" => "UsuarioController@viewEditarUsuarios",
        "/usuario/excluir/{id}" => "UsuarioController@viewExcluirUsuarios",
        "/usuario/{id}/relatorio/{dataInicial}/{dataFinal}" => "UsuarioController@relatorioUsuario",
      
        
    ],
    "POST" => [
        "/usuario/salvar" => "UsuarioController@salvarUsuario",
        "/usuario/atualizar" => "UsuarioController@atualizarUsuario",
        "/usuario/deletar" => "UsuarioController@deletarUsuario",
        
    ]
        ];
    }
}
