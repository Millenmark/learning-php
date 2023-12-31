<?php

const BASE_PATH = __DIR__ .  "/../";

require BASE_PATH . "./utils/functions.php";
// require base_path("config/Database.php");
// require base_path("Response.php");

spl_autoload_register(function ($class) {
  // dd($class);
  $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
  require base_path($class . ".php");
});

require base_path("core/router.php");
