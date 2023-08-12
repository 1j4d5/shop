<?php
namespace App\framwork;

class Database {
    protected static $database;
    protected $connection;
    private final function __construct($database, $usename, $password, $host = "localhost") {
        $credentials = "mysql:host=".$host.";dbname=".$database;
        $this->connection = new \PDO($credentials, $usename, $password);
    }

    public static function getDatabase() : Database {

        if (!isset(self::$database)) {
            $database = env("DATABASE");

            $usename  = env("USERNAME");

            $password = env("PASSWORD");

            $host     = env("HOSTNAME");    
            self::$database = new Database($database, $usename, $password, $host);
        
        }

        return self::$database;
    }
} 