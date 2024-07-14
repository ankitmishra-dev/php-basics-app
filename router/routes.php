<?php
$URL = parse_url($_SERVER['REQUEST_URI'])['path'];

$router = [
'/' => 'controllers/index.php',
'/about' => 'controllers/aboutus.php',
'/contact' => 'controllers/contactus.php',
'/login' => 'views/login.view.php',
'/signup' => 'controllers/signup.php',
];

if(array_key_exists($URL, $router)){
    require dirname(__DIR__). DIRECTORY_SEPARATOR. $router[$URL];
}
else{
    require dirname(__DIR__). DIRECTORY_SEPARATOR. 'views/404.view.php';
}