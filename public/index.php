<?php
include __DIR__ . "/../vendor/autoload.php";
include __DIR__ . "/../src/app/helpers.php";
define("VIEW_PATH", __DIR__."/../src/views");

use App\framwork\Router;
use App\Controllers\Admin\UsersController;
use App\Controllers\HomeController;
$router = new Router;
//home
$router->get("/", [HomeController::class, "index"]);
//useRS
$router->get("/users", [UsersController::class, "index"]) 
       ->post("/users", [UsersController::class, "store"])
       ->get("/users/create", [UsersController::class, "create"])  
       ->get("/users/{id}", [UsersController::class, "show"])
       ->post("/users/{id}", [UsersController::class, "update"])
       ->get("/users/{id}/edit", [UsersController::class, "edit"])       
       ->get("/users/{id}/delete", [UsersController::class, "delete"]);

echo $router->resolve($_SERVER["REQUEST_URI"],$_SERVER["REDIRECT_URL"]??null, $_SERVER["REQUEST_METHOD"]);     