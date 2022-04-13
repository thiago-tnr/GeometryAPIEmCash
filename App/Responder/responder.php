<?php

namespace App\Responder;

use Psr\Http\Message\ResponseInterface as Response;

class Responder
{
    public function json(Response $response, array $content, int $status = 200): Response
    {
        $jsonContent = json_encode(
            $content,
            JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        );
    $response->getBody()->write($jsonContent);

    return $response
    ->withStatus($status)
    ->withHeader('Content-Type', 'application/json');

    }
}
