<?php

namespace App\Engine\Classes;

use App\Engine\AbstractClasses\TodoListManager;

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
