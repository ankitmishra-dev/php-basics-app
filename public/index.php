<?php

/* 
__DIR__ It gives current directory name
It gives parent directory name of __DIR__(current directory name) eg. dir(__DIR__)
*/


define('BASE_PATH', dirname(__DIR__, levels:$level=1));
require BASE_PATH. '/core/functions.php';


/*
This is very impressive php function which
get invoked once the any class is getting called
*/


spl_autoload_register(function ($class) {
    $resultofclass = str_replace('\\','/',$class);
    require  base_path($resultofclass) . '.php';
});

require base_path('router/router.php');



