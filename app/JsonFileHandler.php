<?php

class JsonFileHandler
{
  protected $dir;

  public function __construct(String $dir)
  {
    $this->dir = $dir;
  }


  public function save(array $data)
  {
    try {
      $existingItems = $this->get();
      $data = array_merge($existingItems, $data);
      // die(var_dump($data));
      return file_put_contents($this->dir, json_encode($data));
    } catch (\Exception $e) {
      die($e->getMessage());
    }
  }

  public function get()
  {
    try {
      return (array)  json_decode(file_get_contents($this->dir));
    } catch (\Exception $e) {
      die($e->getMessage());
    }
  }
}
