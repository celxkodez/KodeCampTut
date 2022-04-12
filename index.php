<?php

require_once __DIR__ . "app/classes/Todo.php";

if (isset($_POST)) {
  //DO VALIDATIONS 
  // CALL TODO CLASS AND MANIPULATE

  $todoInstance = new Todo();
  $todoInstance->insert($_POST);
}
