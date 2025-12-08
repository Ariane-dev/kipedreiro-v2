<?php
namespace App\Kipedreiro\Core;


class ChaveAPI{
    private $chaveAPI;

    public function __construct() {
        $this->chaveAPI = "0E8B80CDA6B6594FED48E1D078630A531C38EC2704B218575C4BACEBC857013F";
    }
private function buscaChaveAPI(){
        $headers = getallheaders();
        if (!isset($headers['Authorization'])) {
            return false;
        }
        $token = explode(" ", $headers['Authorization'])[1];
        return $token === $this->chaveAPI;
    }

    public function ValidarChave(){
        if (!$this->buscaChaveAPI()) {
             http_response_code(500);
            echo json_encode([
                'staus' => 'error', 'message' => 'Chave de API inválida.'
            ]);
            exit;
        } 
    }

}