<?php

use core\Authenticate;
use Http\Forms\LoginForm;


$form = LoginForm::validate($attributes = [

    'email' => $_POST['email'],
    'password' => $_POST['password']
]);


 $signedIn = (new Authenticate)->attempt(
    $attributes['email'], $attributes['password']);

if ($signedIn){
   
    $form->error(
        'email', 'No matching account found for that email address and password.')
        ->throw();


   
}


redirect('/');

