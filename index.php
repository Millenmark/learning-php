<?php
require "./utils/functions.php";
require "router.php";
require "config/Database.php";

$config = require("config/config.php");

$db = new Database($config["database"]);

$id = $_GET["id"];

$query = "SELECT * FROM posts WHERE id = ?";

$post = $db->query($query, [$id])->fetch();

echo "<li>" . $post["title"] . "</li>";

