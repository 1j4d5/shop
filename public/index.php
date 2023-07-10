<?php
$routes = [
    "/" => function ( $params = null) {
        return "welcome home";
    },
    "/users" => function ($params=null) {
        return "users index";
    },
    "/users/{id}" => function ($params) {
        return "show user from id".$params["id"]?? "";
    },  
    "/users/{id}/edit" => function ($params) {
        return "show users edit from id".$params?? "";
    }, 
    "/users/{id}/delete" => function ($params) {
        return "show users edit from id ".$params?? "";
    }    
];
$uri = $_SERVER["REQUEST_URI"];
$callable = $routes[$uri]??null;
$params = [];
if (! $callable) {
    foreach ($routes as $route => $function) {

       if (str_contains($route, "{id}")) {

        $pattern = str_replace("/","\/",$route);

        $pattern = str_replace("{id}", "(\d+)", $pattern);

        preg_match_all("/".$pattern."-/", $uri."-", $matches);

        if (isset($matches[sizeof($matches)-1][0])) {

            $params["id"] = $matches[sizeof($matches)-1][0];

            $callable = $function;

            break;
        }        
       }
    }
}
echo $callable($params);