<?php
require "./utils/functions.php";
require "router.php";

// connect to our MySQL database. dsn = data source name
class Database 
{
  public function query()
  {
    $dsn = "mysql:host=localhost;port=3306;dbname=simplecrud;charset=utf8mb4;user=root;password=myAdmin0372021";

    $pdo = new PDO($dsn);

    $statement = $pdo->prepare("SELECT * FROM posts");
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }
}

$db = new Database();

$db->query();



foreach ($posts as $post) {
  echo "<li>" . $post["title"] . "</li>";
}
