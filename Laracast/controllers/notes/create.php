<?php


use core\Database;
use core\validator;


require bash_path('validator.php');

//$config = require('config.php');
$config = require bash_path('config.php');

$db = new Database($config['database']);


//dd(validator::email());




$errors = []; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{

   
   
    if (!$validator::string($_POST['body'],1,1000)) 
    {
        $errors['body'] = 'A body of no more than 1,000 characters is required';
    }
 
}

require view("notes/create.view.php",
[
    'heading'=>'Create note.',
    'errors' => $errors

]);
 