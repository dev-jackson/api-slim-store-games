<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class HomeAction{
    public function __invoke(
        Request $req,
        Response $res
    ): Response{
        $res->getBody()->write(\json_encode(['success' => true]));
        

        return $res->withHeader('Content-Type','application/json');
    }
}

