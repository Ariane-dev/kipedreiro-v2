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
        '/api/usuarios/{pagina}' => 'APIUsuarioController@getUsuarios',
        '/api/usuarios' => 'APIUsuarioController@getUsuarios',


        '/register' => 'AuthController@register',
        '/login' => 'AuthController@login',
        '/logout' => 'AuthController@logout',
        '/admin/dashboard' => 'Admin\DashboardController@index',

        '/servico/listar' => 'ServicoController@viewListarServicos',
        '/servico/listar/{pagina}' => 'ServicoController@viewListarServicos',
        '/servico/criar' => 'ServicoController@viewCriarServico',
        '/api/servicos' => 'PublicApiController@getServicos',
        '/servico/editar/{id}' => 'ServicoController@viewEditarServico',
        '/servico/excluir/{id}' => 'ServicoController@viewExcluirServico',

        '/api/produtos' => 'PublicApiController@getProdutos',
        
    ],
    "POST" => [

        '/api/pedidos' => 'PublicApiController@salvarPedidos',

        "/usuario/salvar" => "UsuarioController@salvarUsuario",
        "/usuario/atualizar/{id}" => "UsuarioController@atualizarUsuario",
        "/usuario/deletar/{id}" => "UsuarioController@deletarUsuario",

        '/register' => 'AuthController@cadastrarUsuario',
        '/login' => 'AuthController@authenticar',

        '/servico/salvar' => 'ServicoController@salvarServico',
        '/servico/atualizar' => 'ServicoController@atualizarServico',
        '/servico/deletar' => 'ServicoController@deletarServico',
        
    ]
        ];
    }
}
