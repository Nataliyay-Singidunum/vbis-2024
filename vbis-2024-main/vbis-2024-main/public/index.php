<?php

require_once __DIR__ . "/../vendor/autoload.php";

use app\controllers\HomeController;
use app\controllers\UserController;
use app\core\Application;

$app = new Application();

$app->router->get("/getUser", [UserController::class, 'readUser']);
$app->router->get("/", [HomeController::class, 'home']);

$app->run();