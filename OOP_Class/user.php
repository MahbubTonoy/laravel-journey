<?php

class User {
  private $username;
  private $email;
  private $password = "123456";

  public function __construct($user, $email )
  {
    $this->username = $user;
    $this->email = $email;
  }

  public function getEmail() {
    return $this->email;
  }
  public function setEmail($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $this->email = $email;
    } else {
      echo "$email is not a valid email<br/>";
    }
  }

  public function addFriend() {
    echo "Added A New Friend";
  }
}