<?php

use App\Polygons\Controller\polygonsController;
use App\Triangule\Controller\TrianguleController;
use App\Retangule\Controller\retanguleController;
use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->addRoutingMiddleware();
$app->addBodyParsingMiddleware();
$app->addErrorMiddleware(true, true, true);


$app->post('/triangule', TrianguleController::class . ':createTriangule');
$app->post('/retangule', retanguleController::class . ':createRetangule');
$app->get('/polygons', polygonsController::class . ':getAllPolygons');

$app->run();
