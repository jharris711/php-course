<?php

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function login() {
        echo $this->name . ' is logged in';
    }
}

// Instantiate a User object
$user1 = new User('Josh Harris', 'test@gmail.com');

/* $user1->name = 'John Doe';
$user1->email = 'test@email.com'; */

$user1->login();

var_dump($user1);
