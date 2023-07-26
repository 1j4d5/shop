<?php

namespace App\Controllers\Admin;
class UsersController
{
    public static function index($params) : string 
    {
        \var_dump($params);
        return "hello from users controller";    
    }
    public static function create($params) : string 
    {
        \var_dump($params);
        return "create method";    
    }
    public static function store($params) : string 
    {
        \var_dump($params);
        return "store method";    
    }
    public static function edit($params) : string 
    {
        \var_dump($params);
        return "edit medhod";    
    }
    public static function update($params) : string 
    {
        \var_dump($params);
        return "update method";    
    }
    public static function delete($params) : string 
    {
        \var_dump($params);
        return "delete method";    
    }
    public static function shows($params) : string 
    {
        \var_dump($params);
        return "show method";    
    }
}