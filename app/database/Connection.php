<?php

namespace App\Database;

class Connection
{
  private $dbHostName;
  private $dbHost;
  private $dbName;
  private $username;
  private $password;

  public function __construct($dbHostName, $dbHost, $dbName, $username, $password)
  {
    $this->dbHostName = $dbHostName;
    $this->dbHost = $dbHost;
    $this->dbName = $dbName;
    $this->username = $username;
    $this->password = $password;
  }

  private function connect()
  {
    try {
      $connectionBuild = "{$this->dbHostName}:host={$this->dbHost}; dbname={$this->dbName};";
      // die(var_dump($connectionBuild));
      $connection = new \PDO($connectionBuild, $this->username, $this->password);
      $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e) {
      throw new \Exception($e);
    }

    return $connection;
  }

  public function getConnection()
  {
    return $this->connect();
  }
}
