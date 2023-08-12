<?php

use App\framwork\View;
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
    return "http://shop.test/".$path;
}