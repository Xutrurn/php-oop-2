<?php

class User
{
    public $username;
    public $password;
    public $email;

    public function __construct(string $username, string $password, string $email)
    {
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
    }
}

