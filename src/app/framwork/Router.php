<?php
namespace App\framwork;
use App\Exception\PageNotFound;
Class Router
{
    protected $routes = [];
    public function get(string $path, callable|array $function) : Router {
        $this->routes["GET"][$path] = $function;
        
        return $this;
    }
    public function post(string $path, callable|array $function) : Router {
        $this->routes["POST"][$path] = $function;
        
        return $this;
    }
    public function resolve($uri,$url, $method) : string {
        try{
            $params = [];    
            $input = parse_url($uri);  
                   
            if (!$url) {
                
                if ($input == false) {
                    $input = ["path"];
                    $input["path"] = trim($uri, "/");
                    $input["path"] = "/".$input["path"];    
                }
                if ($input["path"] !== "/") {
                    $uri = rtrim($input["path"], "/");
                }else {
                    $uri = $input["path"];
                }
            }else {
                $uri = rtrim($url, "/");
                
                
                
            }
            $callable = $this->routes[$method][$uri] ?? null;
            if (isset($input["query"])) {
                parse_str($input["query"], $params);  
            }
        
         
        
        
        if (! $callable) {
            foreach ($this->routes[$method] as $route => $function) {
                if (str_contains($route, "{id}")) {
                    $pattern = str_replace("/", "\/", $route);
                    $pattern = str_replace("{id}", "(\d+)", $pattern);
                    preg_match_all("/".$pattern."-/", $uri."-", $matches);
                    if (isset($matches[sizeof($matches)-1][0])) {
                        $callable = $function;
                        $params["id"] = $matches[sizeof($matches)-1][0];
                        break;
                    }
                }
            }
        }
        if (! $callable) {
            throw new PageNotFound();
        }

        return call_user_func($callable, $params);

    }catch(\Exception $Exception){
        if ($Exception instanceof PageNotFound) {
            http_response_code(404);
        }
        
            return $Exception->getMessage(); 
        }
    }
        
}
