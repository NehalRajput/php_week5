<?php 

$routes = require bash_path('routes.php'); 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];




// The function should route to the correct controller
function routeToControllar($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require BASE_PATH . $routes[$uri];
    } else {
        abort(); // Default to 404 page if route not found
    }
}

// Ensure to call this function
// routeToControllar($uri, $routes);

function aboart($code =404)
{
   // http_response_code($code);
     require bash_path("views/{$code}.php");

      die();
}

routeToControllar($uri , $routes);

//$routes = require('routes.php');
$routes = require bash_path('routes.php');

//$uri = parse_url($_SERVER['REQUEST_URI'])
//['path'];
