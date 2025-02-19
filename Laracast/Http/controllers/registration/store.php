<?php

use core\validator;
use core\App;
use core\Database;

$db = App::resolve(Database::class);


$email = $_POST['email'];
$password = $_POST['password'];




//validate the form inputs.

$errors = [];
if(!validator::email($email))
{
    $errors['email'] = 'please provide valid email address.';

      
}
if(!validator::string($password, 7, 255))
{
    $errors['password'] = 'please provide password of at least sevan characters.';
    
      
}

if (!empty($errors))
{
    return view('registration/create.view.php',[
        'errors'=> $errors
    ]);

}

$db = App::resolve(Database::class);

//chek if the  account already exists
$user =$db->query('select * from users where email = :email',[
    'email'=>$email
])->find();

     
     if($user)
     {
        //then someone with that email already exists and has an account.
       //if yes , redirect to a login page.
       header('location:/');
       exit();


     }
     else
     {
         //if not , save one to the database and then log the user in and redirect
      
         $db->query('INSERT INTO users(email, password)VALUES(:email , :password)',[

         'email' =>$email,
         'password'=>password_hash($password, PASSWORD_BCRYPT)

         ]);

         //marked that the user has logged in.

    
        login($user);

         header('location:/');
         exit();

     }
    