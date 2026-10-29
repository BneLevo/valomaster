<?php

use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    $app->get('/', function ($request, $response) {
        $response->getBody()->write(
            json_encode(['message' => 'Welcome to ValoMaster API'])
        );

        return $response->withHeader(
            'Content-Type',
            'application/json'
        );
    });
};