<?php 

namespace App\Controllers;

use Psr\Container\ContainerInterface;

class BaseController 
{
    protected $container;

    public function __construct(ContainerInterface $container_interface)
    {
        $this->container = $container_interface;
    }
}