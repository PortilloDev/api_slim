<?php 

use Psr\Container\ContainerInterface;

$container->set('db',function(ContainerInterface $contenedor){

    $config = $contenedor->get('db_settings');
    $host = $config->DB_HOST;
    $pass = $config->DB_PASS;
    $charset = $config->DB_CHAR;
    $name = $config->DB_NAME;
    $user = $config->DB_USER;

    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ];

    $dsn = "mysql:host=" . $host . ";dbname=" . $name . ";charset=" . $charset;

    return  new PDO($dsn, $user, $pass, $opt);
});