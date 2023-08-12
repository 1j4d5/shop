<?php

use App\framwork\View;
use App\framwork\Database;
function view($path, $data =[]) {

    $view = new View($path, $data);

    return $view->render();
}
function partial($path) {

    $parts = explode(".", $path);

    $path = implode("/", $parts);

    include(VIEW_PATH."/partials/".$path.".php");
}

function assets($path) {
    
    return env("DOMAIN").$path;
}
function database() {

    return $database = Database::getDatabase();
}
function env($key) {
    return $_ENV[$key] ?? null;
}