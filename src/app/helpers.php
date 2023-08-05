<?php

use App\framwork\View;
function view($path) {
    return View::render($path);
}
function partial($path) {
    $parts = explode(".", $path);
    $path = implode("/", $parts);
    include(VIEW_PATH."/partials/".$path.".php");
}