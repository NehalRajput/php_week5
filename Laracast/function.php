
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
 


 function abort($code = 404, $message = '404 Not Found') {
    http_response_code($code);

     die($message);
     
 // Stop execution completely
}

