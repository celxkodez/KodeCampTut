<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Engine\Classes\Auth;

session_start();
$user = $_SESSION['user'];
// die(var_dump($user));
if (!Auth::check()) {
  // $PreviousPage = end(explode('/', $_SERVER['HTTP_REFERER']));
  header("Location: login.php");
}

require_once "src/resources/views/dashboard.php";
