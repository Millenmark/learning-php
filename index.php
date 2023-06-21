<?php
require "./utils/functions.php";
require "router.php";
require "config/Database.php";

$db = new Database();

$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);



foreach ($posts as $post) {
  echo "<li>" . $post["title"] . "</li>";
}
