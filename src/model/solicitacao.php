<?php

namespace App\Model;

use \App\Model\Beneficiario;
use \App\Model\Classificadores;
use \App\Model\solicitanteDemanda;

class Solicitacao {
    public Beneficiario $beneficiario;
    public Classificadores $classificadores;
    public $codigo = '';
    public $credenciado = array(
        'cpfCnpj' => ''
    );
    public $demanda = array(
        'codigo' => 342,
        'tipoSolicitante' => 'ADMINISTRATIVO'
    );
    public $emailContato;
    public $enteFederativo = array(
        'representante' => array(
            'cpf' => ''
        )
    );
    public $entidade = 'ADMINISTRATIVA';
    public $interacoes = array(
        'interacao' => [array(
            'dataHora' => '',
            'descricao' => '',
            'tipoInteracao' => ''
        )]
    );
    public $resumo = '';
    public $sistema = '03';

    public SolicitanteDemanda $solicitanteDemanda;


    public function __construct(Beneficiario $beneficiario, Classificadores $classificadores, SolicitanteDemanda $solicitanteDemanda) {
        $this->beneficiario = $beneficiario;
        $this->classificadores = $classificadores;
        $this->solicitanteDemanda = $solicitanteDemanda;
    }
}
