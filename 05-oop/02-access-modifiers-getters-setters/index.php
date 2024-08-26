<?php

class User {
  // Properties
  public $name;
  public $email;
  private $status = 'active';

  public function __construct($name, $email) {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login() {
    echo $this->name . ' logged in <br>';
  }

  // Getter
  public function getStatus() {
    return $this->status;
  }

  // Setter
  public function setStatus($status) {
    $this->status = $status;
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login();

# $status = $user1->$status; // This will throw an error because $status is a private property

# $user1->setStatus('inactive');
echo $user1->getStatus();

// var_dump($user2);
