<?php declare(strict_types=1);

require_once __DIR__ . '/../autoload.php';

use core\Router;

$router = new Router();

require_once __DIR__ . '/../config/routes.php';

$router->route($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);