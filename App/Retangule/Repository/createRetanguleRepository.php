<?php

namespace App\Retangule\Repository;

use App\Connection\ConnectionDB;
use App\Retangule\Model\retanguleModel;

class createRetanguleRepository extends ConnectionDB{

        public function __construct()
        {
            parent::__construct();
        }

        public function createRetangule(retanguleModel $retangule)
        {
           $newRetangule = $this->pdo
           ->prepare('INSERT INTO retangule VALUES (id = null, :base1, :base2, :height1, :height2)');
           $newRetangule->execute([
            'base1' => $retangule->getBase1(),
            'base2' => $retangule->getBase2(),
            'height1' => $retangule->getHeight1(),
            'height2' => $retangule->getHeight2(),
           ]);
        }
}