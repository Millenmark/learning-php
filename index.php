<?php
require "./utils/functions.php";
require "router.php";

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

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}

$db = new Database();

$posts = $db->query("SELECT * FROM posts");



foreach ($posts as $post) {
  echo "<li>" . $post["title"] . "</li>";
}
