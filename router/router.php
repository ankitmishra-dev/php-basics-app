<?php

$router = require base_path('router/routes.php');;
$currentUri = parse_url($_SERVER['REQUEST_URI'])['path'];

/*parse URL has been used for parsing and getting the params as well*/

function routeToController($currentUri, $router)
{
    if (array_key_exists($currentUri, $router)) {
        require base_path($router[$currentUri]);
    } else {
        abort(404);
    }
}
routeToController($currentUri, $router);