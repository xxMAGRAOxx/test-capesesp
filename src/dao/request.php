<?php

namespace App\Dao;

class Request extends \App\Dao\Base implements \App\Dao\Database {
    public function __construct() {
        parent::__construct();
    }

    public function get($id) {
    }

    public function getAll() {
        $rows = $this->db->table("solicitacao")->get();

        return $this->db->getCount() ? $rows : [];
    }

    public function set($request) {
        return $this->db->insert(
            'solicitacao',
            [
                'nome'       => $request->user->name,
                'email'      => $request->user->email,
                'telefone'   => $request->user->telephone,
                'matricula'  => $request->user->matricula,
                'assunto'    => $request->subject,
                'mensagem'   => $request->message,
            ]
        );
    }
}
