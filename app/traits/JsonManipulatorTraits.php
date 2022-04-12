<?php

trait JsonManipulatorTrait
{
  private $fileDirectory;

  public function save(array $data)
  {
    try {
      $existingItems = $this->get();
      $data = array_merge($existingItems, $data);
      return file_put_contents($this->fileDirectory, json_encode($data));
    } catch (\Exception $e) {
      die($e->getMessage());
    }
  }

  public function get()
  {
    try {
      return (array)  json_decode(file_get_contents($this->fileDirectory));
    } catch (\Exception $e) {
      die($e->getMessage());
    }
  }
}
