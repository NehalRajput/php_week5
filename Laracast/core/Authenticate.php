<?php

namespace core;

class Authenticate
{
  
     public function attempt($email , $password)
     {
        $user = App::resolve(Database::class)->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email
        ])->find();
     

     if ($user) {
        if (password_verify($password, $user['password'])) {
           $this->login([
                'email' => $email
            ]);
    
            return true;
            

        }
    }

    return false;

}

 public function login($user)
{

    $_SESSION['user'] = [

        'email' => $user['email']
    ];

    session_regenerate_id(true);
}
 public function logout()
{
    $_SESSION = [];

    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

    header("Location: /login"); // Redirect to login page after logout
    exit();
}

}