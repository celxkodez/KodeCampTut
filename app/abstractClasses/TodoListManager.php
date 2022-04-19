<?php

require_once __DIR__ . "/../traits/JsonManipulatorTraits.php";

abstract class TodoListManager
{
  private $allowedEntries = [
    'id',
    'title',
    'completed'
  ];
  use JsonManipulatorTrait;

  public function __construct(string $fileDirectory = "resources/json/todolist.json")
  {
    $this->fileDirectory = $fileDirectory;
  }

  protected function insert(array $data)
  {
    $finalData = [
      'id' => rand(100000, 500000),
      'completed' => false
    ];

    foreach ($data as $key => $value) {
      if (!in_array(strtolower($key), $this->allowedEntries)) {
        throw new \Exception("$key is Not In List Of Allowed Entries");
        return false;
      }
      $finalData[strtolower($key)] = $value;
    }
    $this->save($finalData);
  }

  public function getTodos()
  {
    return $this->get('todos');
  }

  public function mark($todoId, $value)
  {
    $todos = $this->getTodos();
    $todo = array_filter($todos, function ($item) use ($todoId) {
      return $item->id = $todoId;
    });
  }

  public function deleteTodo($id)
  {
    //
  }
}
