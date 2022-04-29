<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Engine\Classes\Todo;
use App\Engine\Database\Query;
use Josantonius\Session\Session;

$todo = new Todo();
$query = new Query();
$todos = $query->query("SELECT * FROM todos");

if (isset($_POST) && count($_POST) > 0) {
  $errors = [];
  $validatedFeilds = [
    'title',
  ];
  foreach ($validatedFeilds as $value) {
    if (!in_array($value, array_keys($_POST)) || $_POST[$value] === '') {
      array_push($errors, "$value Is Required And Must not be empty");
    }
  }

  if (count($errors) < 1) {
    $query->execute("INSERT INTO todos (title) VALUES('{$_POST['title']}')");
    // new Todo($_POST);
  }

  // die(var_dump($errors));
}

Session::init();

$user = Session::get()['jst_user'];

require_once "src/resources/views/index.php";
