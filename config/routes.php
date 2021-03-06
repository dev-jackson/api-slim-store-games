<?php


use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);

    $app->get('/users', \App\Action\UserCreateAction::class);
};