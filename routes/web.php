<?php
/** @var Fomo\Router\Router $router */


$router->get('/web', function () {
    return response()->html('aaa');
});