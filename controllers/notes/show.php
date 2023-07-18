<?php

use Core\Database;
use Core\Response;

$config = require base_path("config/config.php");
$db = new Database($config["database"]);

$currentUserId = 3;
$heading = "Note";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $note = $db->query(
    "SELECT * FROM notes WHERE id = :id",
    [
      "id" => $_GET['id']
    ]
  )->fetchOrAbort();

  authorize($note["user_id"] === $currentUserId, Response::FORBIDDEN);
  // form was submitted. Delete the current note.
  $db->query("delete from notes where id = :id", [
    "id" => $_GET["id"]
  ]);

  header('location: /notes');
  exit();
} else {
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
}
