<?php

namespace App\Controller;

class Home extends \App\Controller\Base
{
    public function index()
    {
        $this->renderView("index", null);
    }
}