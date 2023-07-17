<?php

$config = require base_path("config/config.php");
$db = new Database($config["database"]);

$currentUserId = 3;


$heading = "Note";

$note = $db->query(
  "SELECT * FROM notes WHERE id = :id",
  [
    "id" => $_GET['id']
  ]
)->fetchOrAbort();

authorize($note["user_id"] === $currentUserId, Response::FORBIDDEN);

view("notes/show.view.php", [
  "heading" => "Note",
  "note" => $note
]);
