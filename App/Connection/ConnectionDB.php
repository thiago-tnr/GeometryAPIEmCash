<?php

namespace App\Connection;
use PDO;

abstract class ConnectionDB{

    protected $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:dbname=geometry;host=127.0.0.1", "thiago", "");
        $this->pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );   
    }
}