<?php

use core\App;
use core\Database;
use core\validator;


//dd('submit the form');

//log in the user if the credentials match


$db = App::resolve(Database::class);


$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!validator::email($email)) {
    $errors['email'] = 'please provide valid email address.';
}
if (!validator::string($password, 7, 255)) {
    $errors['password'] = 'please provide valid password.';
}

if (!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

//math the credentials

$user = $db->query('select *from users where email = :email', [

    'email' => $email

])->find();

//dd($user);

if ($user) {


    if (password_verify($password, $user['password'])) {

        login([
            'email' => $email
        ]);

        header('location:/');
        exit();
    }
}
return view('session/create.view.php', [
    'errors' => [
        'email' => 'No matching account found for that email address and password.'
    ]
]);
