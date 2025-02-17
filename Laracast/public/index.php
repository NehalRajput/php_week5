<?php
const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'function.php';
spl_autoload_register(function ($class) {
     require  bash_path("core/{$class}.php");
 
});
require bash_path('router.php');