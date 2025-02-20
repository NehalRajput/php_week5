<?php

use core\Authenticate;
use Http\Forms\LoginForm;
use core\Session;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {

    if ((new Authenticate)->attempt($email, $password)) {

        redirect('/');
    }
    
    $form->error('email', 'No matching account found for that email address and password.');
 
}


Session::flash('errors', $form->errors());


return redirect('/login');

