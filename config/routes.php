<?php declare(strict_types=1);

use app\controllers\IndexController;

$router->get('/', [IndexController::class, 'index']);
$router->get('/show/{id}', [IndexController::class, 'show']);