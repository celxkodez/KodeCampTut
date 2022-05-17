<?php

namespace App\Database;

require_once __DIR__ . "/../database/Connection.php";

class Query
{
  private $connection;

  public function __construct()
  {
    $connection = new Connection('mysql', 'localhost', 'kodecamp_php', 'root', '');

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
    // die(var_dump($this->connection));
        $query = $this->connection->query($query);
        $result = $query->fetchAll();
        return $result;
    }


    public function __destruct()
  {
//    $this->connection->close();
  }
}
