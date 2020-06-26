<?php

namespace App\Action;

use App\Domain\User\Service\UserCreator;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class UserCreatorAction{

    private $userCreator;

    public function __construct(UserCreator $userCreator){
        $this->userCreator = $userCreator;
    }

    public function __invoke(
        Request $req,
        Response $res
    ): Response {
        $data = (array)$req->getParsedBody();

        $userId = $this->userCreator->createUser($data);

        $result = [
            'user_id' => $userId
        ];

        $res->getBody()->write((string)\json_encode($result));
        return $res
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}