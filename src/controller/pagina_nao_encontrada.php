<?php

namespace App\Controller;

class Pagina_nao_encontrada extends \App\Controller\Base {

    public function index() {
        $this->renderView("pagina_nao_encontrada", []);
    }
}
