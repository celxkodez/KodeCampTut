<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Engine\Database\Query;
use App\Engine\Classes\Auth;

if (isset($_POST['email']) & isset($_POST['password'])) {
  $query = new Query();

  $user = $query->query("SELECT * FROM users WHERE email='{$_POST['email']}'")[0];

  (new Auth($user))->attempt($_POST['password']);

  header('Location: /dashboard.php');
}

require_once "src/resources/views/login.php";
