<?php

namespace App\Database;

require_once __DIR__ . "/../database/Connection.php";

class Query
{
  private $connection;

  public function __construct()
  {
    $connection = new Connection('mysql', 'localhost', 'kodecamp_php', 'root', '1111');

    $this->connection = $connection->getConnection();
  }

  public function find($id)
  {
    //do find
  }

  public function execute($query)
  {
    // die(var_dump($this->connection));
    $this->connection->exec($query);
  }

  public function __destruct()
  {
    $this->connection->close();
  }
}
