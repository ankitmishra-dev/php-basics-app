<?php

/* 
__DIR__ It gives current directory name here public
It gives parent directory name here php-basics by doing eg. dirname(__DIR__)
*/

use core\Router;

define('BASE_PATH', dirname(__DIR__, levels:$level=1)); //php-basics
require BASE_PATH. '/core/functions.php';


/*
This is very impressive php function which
get invoked once the any class is getting called
*/


spl_autoload_register(function ($class) {
    $resultofclass = str_replace('\\','/',$class);
    require  base_path($resultofclass) . '.php';
});

$routerObject = new Router();
require base_path('routes.php');

$routesGroup = $routerObject->routesCollection;

$currentUri = parse_url($_SERVER['REQUEST_URI'])['path'];
$currentRequestMethod = $_REQUEST['_method'] ?? $_SERVER['REQUEST_METHOD'];

function routeToController($router, $currentURI, $method)
{   
    foreach ($router as $route) {
        if ($route['uri'] === $currentURI && $route['method'] === $method) {
            return require base_path($route['controller']);
        }
    }
    abort(status:404);

}

routeToController(method:$currentRequestMethod, currentURI:$currentUri, router:$routesGroup);