<?php

require_once "vendor/autoload.php";

@list($controller, $method, $args) = explode("/", $_GET['route']);

if(!isset($controller) || !in_array($controller, $_ROUTES))
    die("404");

switch($controller)
{
    case 'home' :
        $homeController = new \App\Controller\Home();

        $method = isset($method) ? $method : 'index';

        call_user_func_array(array($homeController, $method), []);

    break;

    case 'request' :
        $requestController = new \App\Controller\Request();

        $method = isset($method) ? $method : 'index';

        call_user_func_array(array($requestController, $method), []);

    break;
}