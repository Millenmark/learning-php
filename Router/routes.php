<?php

// Routes
// return [
//   "/" => "controllers/index.php",
//   "/about" => "controllers/about.php",
//   "/contact" => "controllers/contact.php",
//   "/notes" => "controllers/notes/index.php",
//   "/note" => "controllers/notes/show.php",
//   "/notes/create" => "controllers/notes/create.php"
// ];

$router->get("/", "controllers/index.php");
$router->delete("/note", "controllers/notes/destroy.php");

dd($router->routes);
