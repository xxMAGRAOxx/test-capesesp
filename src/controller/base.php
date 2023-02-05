<?php

namespace App\Controller;

abstract class Base
{
    protected function renderView($view, $data) 
    {
        global $responseData;

        $responseData = $data;

        extract($responseData);

        require BASE_DIR . "public/header.php";
        require BASE_DIR . "public/{$view}.php";
        require BASE_DIR . "public/footer.php";
    }
}