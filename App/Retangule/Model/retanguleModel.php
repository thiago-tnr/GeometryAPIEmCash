<?php

namespace App\Retangule\Model;

final class retanguleModel{
    private int $base1;
    private int $height1;
    private int $base2;
    private int $height2;

    public function getBase1(){
        return $this->base1;
    }

    public function setBase1($number1){
        $this->base1 = $number1;
    }

    public function getBase2(){
        return $this->base2;
    }

    public function setBase2($number2){
        $this->base2 = $number2;
    }

    public function getHeight1(){
        return $this->height1;
    }

    public function setHeight1($number3){
        $this->height1 = $number3;
    }

    public function getHeight2(){
        return $this->height2;
    }

    public function setHeight2($number4){
        $this->height2 = $number4;
    }
    

}