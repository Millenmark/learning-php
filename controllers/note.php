<?php

$config = require("config/config.php");
$db = new Database($config["database"]);

$currentUserId = 3;


$heading = "Note";

$note = $db->query("SELECT * FROM notes WHERE id = :id", 
  [
    "id" => $_GET['id']
  ]
)->fetchOrAbort();

authorize($note["user_id"] === $currentUserId, Response::FORBIDDEN);

require "./views/note.view.php";