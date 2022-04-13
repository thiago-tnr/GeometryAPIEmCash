<?php

namespace App\Polygons\Controller;

use App\Polygons\Repository\polygonsRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class polygonsController
{
    private polygonsRepository $repository;

    public function __construct()
    {   
        $this->repository =  new polygonsRepository();
    }

    public function getAllPolygons(Request $request, Response $response, array $args){
        $polygons = $this->repository->getAllPolygons();
        
        $payload = json_encode($polygons);
        
        $response->getBody()->write($payload);
        return $response
                  ->withHeader('Content-Type', 'application/json');   
    }
}