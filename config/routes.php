<?php declare(strict_types=1);

use app\controllers\IndexController;
use app\controllers\PostsController;

$router->get('/', [IndexController::class, 'index']);
$router->get('/show/{id}', [IndexController::class, 'show']);
$router->get('/posts', [PostsController::class, 'index']);
$router->get('/posts/{id}', [PostsController::class, 'show']);