<?php


use core\Database;
use core\Validator;

use core\App;


$db= App::resolve(Database::class);

$errors = [];

// Check if body is valid
if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required';
}

if (!empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

// Debug database query
var_dump($_POST['body']);
//die();

$db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 1
]);


//$_SESSION['_flashed']['errors'] = $form->errors();


header('location: /notes');
exit();

    
    

    

