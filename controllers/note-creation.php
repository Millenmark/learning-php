<?php
require "Validator.php";

$config = require("config/config.php");
$db = new Database($config["database"]);

$heading = "Create a Note";
$errors = [];
$trimmedBody = isset($_POST["body"]) ? trim($_POST["body"]) : '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if (!Validator::string($_POST["body"], 1, 1000)) {
    $errors["body"] = "A body of no more than 1,000 characters is required";
  }

  if (empty($errors)) {
    $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
      "body" => $trimmedBody,
      "user_id" => 3,
    ]);
  }
}

require "views/note-creation.view.php";
