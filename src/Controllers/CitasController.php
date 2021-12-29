<?php 

namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\BaseController;

class CitasController extends BaseController
{
    
    public function getAll($request, $response, $arg)
    {
        $pdo = $this->container->get('db');
        
        $query = $pdo->query("SELECT * FROM citas");

        $response->getBody()->write(json_encode($query->fetchAll()));
        return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(201);
    }
}