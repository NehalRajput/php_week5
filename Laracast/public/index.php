<?php


use core\Session;

session_start();

const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'core/function.php';
spl_autoload_register(function ($class) {
     //dd($class);


   $class = str_replace('\\' , DIRECTORY_SEPARATOR, $class);
  // dd($class);
  require bash_path($class . '.php');

});

require bash_path('bootstrap.php');


$router=new \core\Router();
//require bash_path('core/router.php');


$routes = require bash_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method']?? $_SERVER['REQUEST_METHOD'];
$router->route($uri ,$method); 

Session::unflash();

