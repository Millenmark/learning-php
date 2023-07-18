<?php

use Core\Database;

$config = require("../config/config.php");
$db = new Database($config["database"]);

$notes = $db->query("SELECT * FROM notes WHERE user_id = 3")->fetchAll();

view("notes/index.view.php", [
  "heading" => "My Notes",
  "notes" => $notes
]);
