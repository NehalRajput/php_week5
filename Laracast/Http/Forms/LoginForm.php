<?php

namespace Http\forms;
use core\validator;



class LoginForm
{


     protected $errors =[];

    public function validate($email, $password)
    {
        if (!validator::email($email)) {
          $this->errors['email'] = 'please provide valid email address.';
        }
        if (!validator::string($password)) {
            $this->errors['password'] = 'please provide valid password.';
        }
        
    
        return empty($this->errors);

    }

    public function errors()
    {
        return $this->errors;

    }
    public function error($field , $message)
    {
        $this->errors[$field]= $message;
    }
}