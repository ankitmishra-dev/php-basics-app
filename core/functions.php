<?php

function dd($variable){
    echo "<pre>";
        var_dump($variable);
    echo "</pre>";
    die();
}

function dd_many(...$args){
    foreach ($args as $var) {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
    die();
}

function isURL($url){
    return parse_url($_SERVER['REQUEST_URI'])['path'] == $url;
}

function abort($status = 404)
{
    http_response_code($status);
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . "views/errorpages/{$status}.view.php";
}

function base_path($path, $level=1){
    return dirname(__DIR__, $level).DIRECTORY_SEPARATOR.$path;
}

function view($view, $data=[]){
    extract($data);
    return require base_path('views/'.$view);
}