<?php

// connect to our MySQL database. dsn = data source name
class Database 
{
  public $connection;

  public function __construct()
  {
    $dsn = "mysql:host=localhost;port=3306;dbname=simplecrud;charset=utf8mb4;user=root;password=myAdmin0372021";
    $this->connection = new PDO($dsn);
  }

  public function query($query)
  {

    $statement = $this->connection->prepare($query);
    $statement->execute();

    return $statement;
  }
}