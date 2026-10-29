<?php

use Slim\Factory\AppFactory;

require_once __DIR__ . '/../src/Config/env.php';

$app = AppFactory::create();

$app->addRoutingMiddleware();
$app->addBodyParsingMiddleware();

$app->addErrorMiddleware(
    $_ENV['APP_ENV'] === 'local',
    true,
    true
);

$routes = require __DIR__ . '/../src/Routes/routes.php';
$routes($app);

$app->run();