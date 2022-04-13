<?php

namespace App\Retangule\Controller;

use App\Responder\Responder;
use App\Retangule\Model\retanguleModel;
use App\Retangule\Repository\createRetanguleRepository;
use App\Retangule\Service\createRetanguleService;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class retanguleController
{
    private Responder $responder;
    private createRetanguleRepository $repository;
    private createRetanguleService $service;

    public function __construct()
    {
        $this->repository = new createRetanguleRepository();
        $this->service = new createRetanguleService();
        $this->responder = new Responder();
    }

    public function createRetangule(Request $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();

        if(!isset($data['base1'],$data['base2'],$data['height1'],$data['height2'])){

            return $this->responder->json($response, ['message' => 'Is necessray to send 4 sides to build a triangule'], 422);

        }else{
            $createRetanguleService = $this->service->createRetangule($data['base1'],$data['base2'],$data['height1'],$data['height2']);
        }

        if(!$createRetanguleService['valid']){
            return $this->responder->json($response, ['message' => $createRetanguleService['message']], 422);
        }
        
        if($createRetanguleService['valid']){

            $newRetangule = new retanguleModel();
            $newRetangule->setBase1($data['base1']);
            $newRetangule->setBase2($data['base2']);
            $newRetangule->setHeight1($data['height1']);
            $newRetangule->setHeight2($data['height2']);


            $this->repository->createRetangule($newRetangule);

            return $this->responder->json($response, ['message' => $createRetanguleService['message']], 201);
        }
          
    }

}