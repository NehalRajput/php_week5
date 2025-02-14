
<?php

function dd($value)
 {

 
 echo "<pre>";
 var_dump($value);
 echo "</pre>";

 //die(); //kill the excution
 }

 function urlIs($value)
 {
     return $_SERVER['REQUEST_URI'] === $value;
 }
 



 function abort($code = 404) {
    http_response_code($code);

    if ($code == 403) {
        require "views/403.php"; 
    } else {
        require "views/404.php"; 
    }

    
}

