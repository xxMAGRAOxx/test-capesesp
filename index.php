<?php

require_once "vendor/autoload.php";

@list($controller, $method, $args) = explode("/", $_GET['route']);

if (!isset($controller) || !in_array($controller, $_ROUTES))
    die("404");

session_start();

switch ($controller) {
    case 'home':
        $homeController = new \App\Controller\Home();

        $method = isset($method) && !empty($method) && method_exists($requestController, $method) ? $method : 'index';

        call_user_func_array(array($homeController, $method), []);

        break;

    case 'solicitacao':
        $solicitacaoController = new \App\Controller\Solicitacao();

        $method = isset($method) && !empty($method) && method_exists($solicitacaoController, $method) ? $method : 'index';

        call_user_func_array(array($solicitacaoController, $method), []);

        break;
}
