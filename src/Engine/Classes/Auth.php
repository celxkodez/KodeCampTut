<?php

namespace App\Engine\Classes;

class Auth
{
  protected $data = [];
  private $isLoggedIn = false;

  public function __construct(array $data, $validationFeild = 'email')
  {
    $this->data = $data;
  }

  public function attempt(string $password)
  {
    $this->isLoggedIn = true;
    if (password_verify($password, $this->data['password'])) {
      session_start();
      $_SESSION['user'] = $this->data;
      return true;
    }
    return false;
  }

  public function logout()
  {
    $this->isLoggedIn = false;
    session_destroy();
  }

  public static function check()
  {
    return isset($_SESSION['user']);
  }
}
