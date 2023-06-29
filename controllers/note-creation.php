<?php
$config = require("config/config.php");
$db = new Database($config["database"]);

$heading = "Create a Note";
$errors = [];
$trimmedBody = isset($_POST["body"]) ? trim($_POST["body"]) : '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (strlen($trimmedBody) === 0) {
    $errors["body"] = "A body is required";
  }

  if (strlen($trimmedBody) > 1000) {
    $errors["body"] = "The body can not be more than 1000 characters.";
  }

  if (empty($errors)) {
    $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
      "body" => $trimmedBody,
      "user_id" => 3,
    ]);
  }
}

require "views/note-creation.view.php";
