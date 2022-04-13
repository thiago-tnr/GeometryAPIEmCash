<?php

namespace App\Retangule\Service;

class createRetanguleService{

    public function createRetangule($base1, $base2, $height1, $height2){

        if(($height1 > $base1) && ($height2 > $base2) ){
            return ['message' => 'Not possible to create, height cannot be greater than the base ', 'valid' => false];
        }

        if($base1 === $height2){
            return ['message' => 'Not possible to create, if all sides are equals, it is not possible to create a rectangle', 'valid' => false];
        }
        
        if(($base1 === $base2) && ($height1 === $height2)){
            return ['message' => 'Created with sucess', 'valid' => true]; 
        }else{
            return ['message' => 'Not possible to create, Is necessary to base1 = base2 and height1 = height2', 'valid' => false];
        }    
       
    }
}