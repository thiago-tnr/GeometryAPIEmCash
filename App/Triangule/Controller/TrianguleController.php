<?php

namespace App\Triangule\Controller;

use App\Responder\Responder;
use App\Triangule\Model\ITriangleModel;
use App\Triangule\Repository\createTriangleRepository;
use App\Triangule\Service\createTrianguleService;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class TrianguleController
{
    private Responder $responder;
    private createTriangleRepository $repository;
    private createTrianguleService $service;

    public function __construct()
    {
        $this->repository = new createTriangleRepository();
        $this->service =  new createTrianguleService();
        $this->responder = new Responder();
    }
  
    public function createTriangule(Request $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();

        if(!isset($data['side1'],$data['side2'],$data['side3'])){

            return $this->responder->json($response, ['message' => 'Is necessray to send 3 sides to build a triangule'], 422);

        }else{
            $triangule = $this->service->createTrianguleService($data['side1'],$data['side2'],$data['side3']);
        }
        
        if(!$triangule){

            return $this->responder->json($response, ['message' => 'Is not possible create triangule'], 422);
        }
        
            $newTri = new ITriangleModel();
            $newTri->setSide1($data['side1']);
            $newTri->setSide2($data['side2']);
            $newTri->setSide3($data['side3']);

            $this->repository->createTriangule($newTri);
        
            return $this->responder->json($response, ['message' => 'Created with sucess'], 201);

    }

 
}