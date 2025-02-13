<?php 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/Laracast' => 'controllers/index.php',
    '/Laracast/about' => 'controllers/about.php',
    '/Laracast/contact' => 'controllers/contact.php',
];




 function routeToControllar($uri , $routes){

if (array_key_exists($uri, $routes)) {
   
    require $routes[$uri];
}
else {
   aboart();
    
}}
function aboart($code =404)
{
   // http_response_code($code);
     require "views/{$code}.php";

      die();
}

routeToControllar($uri , $routes);
