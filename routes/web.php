<?php
/** @var Fomo\Router\Router $router */
use App\Controllers\Controller;

$router->get('/user', [Controller::class, 'index']);