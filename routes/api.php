<?php

/** @var Fomo\Router\Router $router */
include_once 'web.php';

use Fomo\Router\Router;

$router->get('/' , function () {
    return response()->plainText('hello world');
});

$router->get('/api/v1', function () {
    return response()->json([
        'data' => [
            'message' => 'hello'
        ]
    ]);
});