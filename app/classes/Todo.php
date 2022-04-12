<?php

require_once __DIR__ . "/app/abstractClasses/TodoList.php";

class Todo extends TodoList
{
  public function __construct(array $data = null)
  {
    parent::__construct();
    if ($data !== null) {
      $this->insert($data);
    }
  }
}
