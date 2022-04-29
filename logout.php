<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Engine\Classes\Auth;

Auth::logout();
header("Location: /login.php");
