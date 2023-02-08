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
            \CapesespApiClient::gravaSolicitacao($json_gravar_solicitacao);
        } catch (Exception $e) {
        }

        header("Location: index");
    }
}
