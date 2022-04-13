<?php

namespace App\Tests\RectanguleUnitTests;

require __DIR__ . '../../RectanguleUnitTests/RectanguleFactory.php';

use App\Tests\RectanguleUnitTests\RectanguleFactory;
use PHPUnit\Framework\TestCase;

class RectanguleTest extends TestCase{

    public function testCreateRectangule()
    {   
        $rectanguleCreateTest = new RectanguleFactory();
        $base1 = 13;
        $base2 = 13;
        $height1 = 10;
        $height2 = 10;     

        $dataOfRectangule = $rectanguleCreateTest->testCreateRectanguleFactory($base1, $base2, $height1, $height2);
        $this->assertTrue($dataOfRectangule);
        
    }
}