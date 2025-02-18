<?php
use core\App;
use core\Container;
use core\Database;

$container = new Container();

$container->bind('core\Database',function(){

    $config = require bash_path('config.php');
  
    return  new Database($config['database']);
 
});

App::setContainer($container);

 //$db = $container->resolve('core\Database');
 //dd($db);


 //$container->resolve('dsdeeeerer');


