<?php

namespace App\framwork;

class View{
    public static function render(string $path):string
    {
        $parts = explode(".", $path);
        $path = implode("/", $parts);
        \ob_start();
        include(VIEW_PATH."/".$path.".php");
        return (string)\ob_get_clean();    
    }
}