<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Engine\Classes\Auth;
use Josantonius\Session\Session;

Session::init();

if (!Auth::check()) {
  // $PreviousPage = end(explode('/', $_SERVER['HTTP_REFERER']));
  header("Location: login.php");
}

$user = Session::get()['jst_user'];

require_once "src/resources/views/dashboard.php";
