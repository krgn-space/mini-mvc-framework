<?php declare(strict_types=1);

require_once __DIR__ . '/../autoload.php';

use app\controllers\IndexController;

$controller = new IndexController();
$controller->index();