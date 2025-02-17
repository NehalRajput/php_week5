<?php
const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'core/function.php';
spl_autoload_register(function ($class) {
     //dd($class);


   $class = str_replace('\\' , DIRECTORY_SEPARATOR, $class);
  // dd($class);
  require bash_path($class . '.php');

});
require bash_path('core/router.php');