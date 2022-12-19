<?php
class User {
    private string $username;
    private string $email;

    function __construct(string $username, string $email){
        $this->username = $username;
        $this->email = $email;
    }
}