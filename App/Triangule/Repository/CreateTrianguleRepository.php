<?php

namespace App\Triangule\Repository;

use App\Connection\ConnectionDB;

use App\Triangule\Model\ITriangleModel;

class createTriangleRepository extends ConnectionDB{ 
    public function __construct()
    {
        parent::__construct();
    }
    
    public function createTriangule(ITriangleModel $triangule){
        $newTriangule = $this->pdo
        ->prepare("INSERT INTO triangule VALUES(id = null, :side1, :side2, :side3)");
        $newTriangule->execute([
            'side1' => $triangule->getSide1(),
            'side2' => $triangule->getSide2(),
            'side3' => $triangule->getSide3(),
        ]);
    }
}