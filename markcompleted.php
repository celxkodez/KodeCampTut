<?php

if (isset($_GET['id'])) {
  // do edit
  require_once __DIR__ . "/app/classes/Todo.php";

  $todo = new Todo();
  $todo->mark($_GET['id'], true);
}
header("Location: /");
