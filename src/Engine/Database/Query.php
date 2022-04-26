<?php

namespace App\Engine\Database;

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

  public function query($query)
  {
    $data = $this->connection->query($query);
    return $data->fetchAll(\PDO::FETCH_ASSOC);
  }

  public function __destruct()
  {
    // $this->connection->close();
  }
}
