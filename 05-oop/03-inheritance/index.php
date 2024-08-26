<?php

class User {
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email) {
    $this->name = $name;
    $this->email = $email;
  }

  public function login() {
    echo $this->name . ' logged in <br>';
  }
}

class Admin extends User {
  public $level;

  public function __construct($name, $email, $level) {
    parent::__construct($name, $email);
    $this->level = $level;
  }

  public function login() {
    echo $this->name . ' logged in as an admin <br>';
  }
}
$admin1 = new Admin('John Doe', 'test@gmail.com', 5);
$admin1->login();
var_dump($admin1);
