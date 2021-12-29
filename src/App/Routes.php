<?php 

use Slim\Routing\RouteCollectorProxy; //definir rutas en grupo

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/citas', 'App\Controllers\CitasController:getAll');
});

