<?php


use core\Session;
use core\ValidationException;


const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'/vendor/autoload.php';

session_start();


require BASE_PATH.'core/function.php';


require bash_path('bootstrap.php');



$router=new \core\Router();


$routes = require bash_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method']?? $_SERVER['REQUEST_METHOD'];
try{
   $router->route($uri ,$method); 

}catch(ValidationException $exception )
{

 // dd($_SERVER);
    
  Session::flash('errors', $exception->errors);
 
  Session::flash('old',
     $exception->old);
  

  return redirect($router->previousUrl());
}

Session::unflash();

