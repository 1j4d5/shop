<?php
include __DIR__ . "/../vendor/autoload.php";
include __DIR__ . "/../src/app/helpers.php";
define("VIEW_PATH", __DIR__."/../src/views");
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();
//var_dump($_ENV);
use App\framwork\Router;
use App\Controllers\Admin\UsersController;
use App\Controllers\HomeController;
$resolve_data =      [
       0 => $_SERVER["REQUEST_URI"],
       1 => $_SERVER["REDIRECT_URL"]??null,
       2 => $_SERVER["REQUEST_METHOD"] 
                     ];
$router = new Router;
//calling for the router class 
$router
//home
       ->sendq($resolve_data[2], "/", [HomeController::class, "index"])

//useRS
       ->get("/users", [UsersController::class, "index"]) 
       ->post("/users", [UsersController::class, "store"])
       ->get("/users/create", [UsersController::class, "create"])  
       ->get("/users/{id}", [UsersController::class, "show"])
       ->post("/users/{id}", [UsersController::class, "update"])
       ->get("/users/{id}/edit", [UsersController::class, "edit"])       
       ->get("/users/{id}/delete", [UsersController::class, "delete"])
       
;
//cookie dumping
/*
if (isset($_COOKIE)) {
       if (!empty($_COOKIE)) {
              var_dump($_COOKIE);
       }
}
*/

  //var_dump($resolve_data);   
echo $router->resolve($resolve_data[0], $resolve_data[1], $resolve_data[2]);     