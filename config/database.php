<?php

// connect to our MySQL database. dsn = data source name
class Database 
{
  public $connection;

  public function __construct($config, $username = "root", $password = "myAdmin0372021")
  {
    $dsn = "mysql:" . http_build_query($config, "", ";");

    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  public function query($query)
  {

    $statement = $this->connection->prepare($query);
    $statement->execute();

    return $statement;
  }
}