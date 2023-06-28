<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];


// Routes
$routes = [
  "/" => "controllers/index.php",
  "/about" => "controllers/about.php",
  "/contact" => "controllers/contact.php",
  "/notes" => "controllers/notes.php",
  "/note" => "controllers/note.php"
];

if(array_key_exists($uri, $routes)) {
  require $routes[$uri];
} else {
  abort();
}