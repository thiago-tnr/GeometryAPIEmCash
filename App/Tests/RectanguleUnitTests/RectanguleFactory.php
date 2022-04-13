<?php

namespace App\Tests\RectanguleUnitTests;

require __DIR__ .'../../../Retangule/Service/createRetanguleService.php';

use App\Retangule\Service\createRetanguleService;

class RectanguleFactory{

    public function testCreateRectanguleFactory($base1, $base2, $height1, $height2){

        $createRectanguleTests = new createRetanguleService();
        $newRectangule = $createRectanguleTests->createRetangule($base1, $base2, $height1, $height2);

        return $newRectangule['valid'];
    }
}