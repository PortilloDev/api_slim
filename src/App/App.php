<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$container_aux = new \DI\Container();
//crear contenedor en blanco
AppFactory::setContainer($container_aux);
$app = AppFactory::create();
$container = $app->getContainer();

require __DIR__ . '/Routes.php';
require __DIR__ . '/Configs.php';
require __DIR__ . '/Dependencias.php';
$app->run();