<?php

namespace App\Controllers\Admin;

class UsersController
{
    public static function index($params) : string 
    {
        return view("layouts.admin");
    }
    public static function create($params) : string 
    {
        
        return "create method";    
    }
    public static function store($params) : string 
    {
        
        return "store method";    
    }
    public static function edit($params) : string 
    {
        
        return "edit medhod";    
    }
    public static function update($params) : string 
    {
        
        return "update method";    
    }
    public static function delete($params) : string 
    {
        
        return "delete method";    
    }
    public static function shows($params) : string 
    {
        
        return "show method";    
    }
}