<?php

if (isset($_GET['id'])) {
    // do edit
    require_once __DIR__ . "/app/classes/Todo.php";

    $todo = new Todo();
    $todo->deleteTodo($_GET['id']);
}
header("Location: /");
