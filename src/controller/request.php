<?php

namespace App\Controller;

class Request extends \App\Controller\Base
{
    public function index()
    {
        $requestDao = new \App\Dao\Request();

        $this->renderView("request", []);
    }

    public function create()
    {
        $formData = filter_input_array(INPUT_POST);

        $user = new \App\Model\User();
        $user->name = $formData["name"];
        $user->email = $formData["email"];
        $user->telephone = $formData["phone"];
        $user->matricula = $formData["matricula"];
        $subject = $formData["subject"];
        $message = $formData["message"];        

        $request = new \App\Model\Request($user, $subject, $message);
        $requestDao = new \App\Dao\Request();

        // Faltou o principal que era isso aqui! Por hora deixei salvando no banco de dados mesmo.

        // \CapesespApiClient::gravaSolicitacao($request);

        $requestDao->set($request);

        header("Location: index");
    }

}