<?php

namespace App\Model;

use \App\Model\User;

class Request
{
    public $user;
    public $subject;
    public $message;

    public function __construct(User $user, $subject, $message)
    {
        $this->user = $user;
        $this->subject = $subject;
        $this->message = $message;
    }
}