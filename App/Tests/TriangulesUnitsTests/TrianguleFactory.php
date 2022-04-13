<?php

namespace App\Tests\TriangulesUnitsTests;

require __DIR__ . '../../../Triangule/Service/CreateTrianguleService.php';
use App\Triangule\Service\createTrianguleService;

class TrianguleFactory
{
    public function testcreateTrianguleFactory($side1,$side2,$side3){
        
        $triangule = new createTrianguleService();
        $createTraignuleTest = $triangule->createTrianguleService($side1,$side2,$side3);

        return $createTraignuleTest;
    }
}