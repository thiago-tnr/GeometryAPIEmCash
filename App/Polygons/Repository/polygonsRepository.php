<?php

namespace App\Polygons\Repository;

use App\Connection\ConnectionDB;


class polygonsRepository extends ConnectionDB{

    public function __construct()
    {
         parent::__construct();
    }

    public function getAllPolygons()
    {
        $statement= $this->pdo
        ->query('SELECT * FROM triangule')  
        ->fetchAll(\PDO::FETCH_ASSOC );

        $teste = $this->pdo
        ->query('SELECT * FROM retangule')  
        ->fetchAll(\PDO::FETCH_ASSOC );

        return [
        'triangule' => $statement, 
        'retangule'=> $teste
        ];
    }
}