<?php



$uri    = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = require 'routers.php';


//solution one
//if ($uri === '/'){
//    require 'controller/index.php';
//}elseif ($uri === '/about'){
//    require 'controller/about.php';
//}elseif ($uri === '/contact'){
//    require 'controller/contact.php';
//}


function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else {
        abort(404);
    }
}

function abort($code = 404){

    http_response_code($code);
    require "view/{$code}.php";
    die();
}


routeToController($uri, $routes);