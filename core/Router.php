<?php

namespace core;

class Router
{   
    public $routesCollection = [];

    public function routing($uri, $controller, $method){

        $this->routesCollection[] =  [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];

    }

    public function get($uri, $controller){

        $this->routing($uri, $controller, 'GET');

    }

    public function post($uri, $controller){

        $this->routing($uri, $controller, 'POST');

    }

    public function put($uri, $controller){

        $this->routing($uri, $controller, 'PUT');

    }

    public function patch($uri, $controller){

        $this->routing($uri, $controller, 'PATCH');

    }

    public function delete($uri, $controller){

        $this->routing($uri, $controller, 'DELETE');

    }

}