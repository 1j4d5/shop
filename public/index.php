<?php
include __DIR__ . "/../vendor/autoload.php";
use App\framwork\Router;
$router = new Router;
$router->get("/", function ($params = null) {return "welcome home";})
       ->post("/users", function ($params = null) {return "users index";}) 
       ->get("/users/{id}", function ($params = null) {return "user show of id ".$params["id"] ?? "";})
       ->get("/users/{id}/edit", function ($params = null) {return "user edit of id ".$params["id"] ?? "";})
       ->get("/users/{id}/delete", function ($params = null) {return "user delete of id ".$params["id"] ?? "";});

echo $router->resolve($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]);       