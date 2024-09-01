<?php

namespace core;

class Router
{   
    public $routesCollection = [];

    public function routing($method, $uri, $controller){

        $this->routesCollection[] =  [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];

    }

    public function get(...$args){

        $this->routing(strtoupper(__FUNCTION__), ...$args);
        /* strtoupper(__FUNCTION__) this will return GET */

    }

    public function post(...$args){

        $this->routing('POST', ...$args);

    }

    public function put(...$args){

        $this->routing('PUT', ...$args);

    }

    public function patch(...$args){

        $this->routing('PATCH', ...$args);

    }

    public function delete(...$args){

        $this->routing('DELETE', ...$args);

    }

}