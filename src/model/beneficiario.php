<?php

namespace App\Model;

class Beneficiario {
    public $identificacaoBeneficiario = array(
        'matricula' => array(
            'matriculaCapesesp' => array(
                'numero' => ''
            )
            ),
            'nome' => array(
                'nomeCompleto' => ''
            )
    );
    public $dadosPessoais = array(
        'documentos' => array(
            'documento' => array()
        )
    );
}
