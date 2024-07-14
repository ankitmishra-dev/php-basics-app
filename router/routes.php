<?php
$URL = parse_url($_SERVER['REQUEST_URI'])['path'];

/*parse URL has been used for parsing and getting the params as well*/

$router = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/aboutus.php',
    '/contact' => 'controllers/contactus.php',
    '/login' => 'views/login.view.php',
    '/signup' => 'controllers/signup.php',
];

function abort($status = 404)
{
    http_response_code($status);
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . "views/{$status}.view.php";
}

function routeToController($URL, $router)
{
    if (array_key_exists($URL, $router)) {
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . $router[$URL];
    } else {
        abort(404);
    }
}
routeToController($URL, $router);