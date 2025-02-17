<?php 

namespace core;
class Router
{
    protected $routes = [];

    public function get($uri , $controllers)
    {
           $this->routes[]= [
             
            'uri'=> $uri,
            'controllers'=>$controllers,
             'method'=>'GET'

              
           ];
    } 
    public function post($uri , $controllers)
    {
        $this->routes[]= [
             
            'uri'=> $uri,
            'controllers'=>$controllers,
             'method'=>'POST'

              
           ];
    }
    public function delete($uri , $controllers)
    { 
        $this->routes[]= [
             
            'uri'=> $uri,
            'controllers'=>$controllers,
             'method'=>'DELETE'

              
           ];
      
    }
    public function patch($uri , $controllers)
    {
        $this->routes[]= [
             
            'uri'=> $uri,
            'controllers'=>$controllers,
             'method'=>'PATCH'

              
           ];
    }
    public function put($uri , $controllers)
    {
        $this->routes[]= [
             
            'uri'=> $uri,
            'controllers'=>$controllers,
             'method'=>'PUT'

              
           ];
    }

    public function route($uri , $method)
    {
         foreach($this->routes as $route)
         {
            if($route['uri']===$uri && $route['method']=== strtoupper($method))
            {
                return require bash_path($route['controllers']);

            }
         }

       //  $this->abort();
    }
   protected function aboart($code =404)
{
   // http_response_code($code);
     require bash_path("views/{$code}.php");

      die();
}

}




/*
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

*/
//$routes = require('routes.php');
