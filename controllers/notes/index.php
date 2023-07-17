<?php

$config = require("config/config.php");
$db = new Database($config["database"]);

$heading = "My Notes";

$notes = $db->query("SELECT * FROM notes WHERE user_id = 3")->fetchAll();

require "./views/notes/index.view.php";
