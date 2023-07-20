<?php

class Router
{
  protected $routes = [];

  public function get($uri, $controller)
  {
    $this->routes[] = [
      "uri" => $uri,
      "controller" => $controller,
      "method" => "GET"
    ];
  }

  public function post($uri, $controller)
  {
    $this->routes[] = [
      "uri" => $uri,
      "controller" => $controller,
      "method" => "POST"
    ];
  }

  public function delete($uri, $controller)
  {
    $this->routes[] = [
      "uri" => $uri,
      "controller" => $controller,
      "method" => "DELETE"
    ];
  }

  public function patch($uri, $controller)
  {
    $this->routes[] = [
      "uri" => $uri,
      "controller" => $controller,
      "method" => "PATCH"
    ];
  }

  public function put($uri, $controller)
  {
    $this->routes[] = [
      "uri" => $uri,
      "controller" => $controller,
      "method" => "PUT"
    ];
  }
}
