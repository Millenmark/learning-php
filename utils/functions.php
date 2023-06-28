<?php 

function urlIs($value) {
  return $_SERVER["REQUEST_URI"] === $value;
}

function dd($value) {
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function abort($statusCode = 404) {
  http_response_code($statusCode);
  require "views/$statusCode.php";
  die();
}

function authorize($condition, $status = Response::NOT_FOUND) {
  if(!$condition) {
    abort($status);
  }
}