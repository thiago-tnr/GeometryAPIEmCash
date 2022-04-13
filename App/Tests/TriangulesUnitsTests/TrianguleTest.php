<?php

namespace App\Tests\TriangulesUnitsTests;

require __DIR__ . '../../../Tests/TriangulesUnitsTests/TrianguleFactory.php';

use PHPUnit\Framework\TestCase;

class TrianguleTest extends TestCase{

    public function testCreateTriangule(){
        $data = new TrianguleFactory;

        $side1 = 7;
        $side2 = 7;
        $side3 = 7;

        $dataOfTriangule = $data->testcreateTrianguleFactory($side1,$side2,$side3);

        $this->assertTrue($dataOfTriangule);

    }
}