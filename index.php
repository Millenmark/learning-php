<?php
require "./utils/functions.php";
require "router.php";
require "config/Database.php";

$config = require("config/config.php");

$db = new Database($config["database"]);

$posts = $db->query("SELECT * FROM posts")->fetchAll();



foreach ($posts as $post) {
  echo "<li>" . $post["title"] . "</li>";
}
