<?php

namespace App\Controller;

use Exception;

class Solicitacao extends \App\Controller\Base {

    public function index() {
        $this->renderView("solicitacao", []);
    }

    public function gravar() {
        $formData = filter_input_array(INPUT_POST);

        $beneficiario = new \App\Model\Beneficiario();
        $beneficiario->identificacaoBeneficiario['nome']['nomeCompleto'] = $formData["name"];

        $classificadores = new \App\Model\Classificadores();

        $solicitanteDemanda = new \App\Model\SolicitanteDemanda();

        $solicitacao = new \App\Model\Solicitacao($beneficiario, $classificadores, $solicitanteDemanda);
        $solicitacao->emailContato = $formData["email"];
        $solicitacao->resumo = $formData["subject"];
        $solicitacao->interacoes['interacao'][0]['descricao'] = $formData["message"];

        $json_gravar_solicitacao = json_encode(array('solicitacao' => $solicitacao));

        try {
            $solicitacao_criada = \CapesespApiClient::gravaSolicitacao($json_gravar_solicitacao);

            $_SESSION['codigo'] = $solicitacao_criada->codigo;
            $_SESSION['protocolo'] = $solicitacao_criada->protocolo;
            $_SESSION['senha'] = $solicitacao_criada->senha;

            header("Location: solicitacao_criada");
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            header("Location: index");
        }
    }

    public function solicitacao_criada() {
        if (!empty($_SESSION) && isset($_SESSION['codigo']) && isset($_SESSION['protocolo']) && isset($_SESSION['senha'])) {
            $this->renderView("solicitacao_criada", []);
        } else {
            $this->renderView("solicitacao", []);
        }
    }
}
