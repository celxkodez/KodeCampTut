<?php

require "app/JsonFileHandler.php";
$array = [
  'name' => 'name',
  'message' => 'yutriutr'
];

$array['name'];
foreach ($array as $key => $singleItem) {
}
if (isset($_POST)) {
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars(stripslashes(trim($value)));
  }

  $json = new JsonFileHandler('resources/json/contacts.json');
  // die(var_dump($existingFiles));
  $key = "Table_" . rand(10000, 2000000);
  $data = [
    $key => $_POST
  ];

  $json->save($data);
  // die(var_dump($data));
  // die(var_dump($json->save($data)));
  var_dump($json->get());
}
