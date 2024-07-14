<?php
function dd($variable){
    echo "<pre>";
        var_dump($variable);
    echo "</pre>";
    die();
}

function isURL($url){
    return parse_url($_SERVER['REQUEST_URI'])['path'] == $url;
}