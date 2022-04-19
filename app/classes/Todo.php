<?php

require_once __DIR__ . "/../abstractClasses/TodoListManager.php";

class Todo extends TodoListManager
{
  public function __construct(array $data = null)
  {
    parent::__construct();
    if ($data !== null) {
      $this->insert($data);
    }
  }
}
