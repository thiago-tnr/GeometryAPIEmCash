<?php


namespace App\Triangule\Service;

class createTrianguleService{

    public function createTrianguleService($side1, $side2, $side3){
        if(is_int($side1) && is_int($side2) && is_int($side3)){
            if($side1 < $side2 + $side3 &&$side2 < $side3 + $side1 && $side3 < $side1 + $side2){
                return true;
            }else{ 
                return false;
            }
        }
    }
}