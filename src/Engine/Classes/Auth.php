<?php

namespace App\Engine\Classes;

use Josantonius\Session\Session;

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

      Session::init();
      Session::set('user', $this->data);

      return true;
    }
    return false;
  }

  public static function logout()
  {
    Session::init();
    Session::set('user', null);
    Session::destroy();
  }

  public static function check()
  {
    $value = Session::get();
    return !is_null($value) && !is_null(Session::get('user'));
  }
}
