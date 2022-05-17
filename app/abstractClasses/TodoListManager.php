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

  public function mark($todoId, bool $value)
  {
      try {
          $todos = $this->getTodos();
          $todo = array_filter($todos, function ($item) use ($todoId) {
              return $item->id == $todoId;
          });

          $todo = current($todo);

          $existingItems = array_filter($todos, function ($item) use ($todoId) {
              return $item->id != $todoId;
          });

          $existingItems = array_map(function($item){
              return [
                  'id' => $item->id,
                  'title' => $item->title,
                  'completed' => $item->completed,
              ];
          }, $existingItems);

          $todo->completed = $value;
          $todo = [
              'id' => $todo->id,
              'title' => $todo->title,
              'completed' => $todo->completed,
          ];

          $existingItems[] = $todo;

          $data = [
              'todos' => array_values($existingItems)
          ];

          return file_put_contents("resources/json/todolist.json", json_encode($data));
      }catch (\Exception $e) {
          die($e->getMessage());
      }
  }

  public function deleteTodo($id)
  {
      try {
          $todos = $this->getTodos();

          $existingItems = array_filter($todos, function ($item) use ($id) {
              return $item->id != $id;
          });

          $existingItems = array_map(function($item){
              return [
                  'id' => $item->id,
                  'title' => $item->title,
                  'completed' => $item->completed,
              ];
          }, $existingItems);

          $data = [
              'todos' => array_values($existingItems)
          ];

          return file_put_contents("resources/json/todolist.json", json_encode($data));
      }catch (\Exception $e) {
          die($e->getMessage());
      }
  }
}
