<?php

use Core\Database;
use Core\Validator;

require base_path("core/Validator.php");

$config = require base_path("config/config.php");
$db = new Database($config["database"]);

$heading = "Create a Note";
$errors = [];
$trimmedBody = isset($_POST["body"]) ? trim($_POST["body"]) : '';

// dd(Validator::email('adfasdfadf'));

// if (!Validator::email('adfadsf')) {
//   dd("That is not a valid email");
// }

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

view("notes/create.view.php", [
  "heading" => "Create Note",
  "errors" => $errors
]);
