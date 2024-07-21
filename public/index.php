<?php

/* 
__DIR__ It gives current directory name
It gives parent directory name of __DIR__(current directory name) eg. dir(__DIR__)
*/
define('BASE_PATH', dirname(__DIR__, levels:$level=1));
require BASE_PATH. '/helpers/functions.php';
require base_path('helpers/Response.php');
require base_path('router/router.php');



