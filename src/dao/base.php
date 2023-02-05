<?php

namespace App\Dao;

abstract class Base
{
    protected $db;

    protected function __construct()
    {
        $this->db = \DB::getInstance();
    }
}