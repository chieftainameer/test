<?php

namespace App\Exceptions;

class InvalidName 
{
    public $name;
    public $email;

    public function address()
    {
        return $this;
    }
}