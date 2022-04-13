<?php

namespace App\Triangule\Model;

class ITriangleModel{
    private int $side1;
    private int $side2;
    private int $side3;

    public function getSide1(){
        return $this->side1;
    }

    public function setSide1($number1){
        $this->side1 = $number1;
    }

    public function getSide2(){
        return $this->side2;
    }

    public function setSide2($number2){
        $this->side2 = $number2;
    }

    public function getSide3(){
        return $this->side3;
    }

    public function setSide3($number3){
        $this->side3 = $number3;
    }
}
