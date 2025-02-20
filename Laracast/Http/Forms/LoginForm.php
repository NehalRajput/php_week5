<?php

namespace Http\forms;

use Attribute;
use core\validator;
use core\ValidationException;



class LoginForm
{

     protected $errors =[];

     public function __construct(public array $attributes)
     {
       
        if (!validator::email($attributes['email'])) {
            $this->errors['email'] = 'please provide valid email address.';
          }
          if (!validator::string($attributes['password'])) {
              $this->errors['password'] = 'please provide valid password.';
          }
          
      
        //  return empty($this->errors);
     }

    public  static function validate($attributes)
    {
        
        $instnace = new static($attributes);

        return $instnace->failed() ? $instnace->throw(): $instnace;


    }

     public function throw()
     {
        ValidationException::throw($this->errors(), $this->attributes);

     }

    public function failed()
    {
      return count($this->errors);
    }

    public function errors()
    {
        return $this->errors;

    }
    public function error($field , $message)
    {
        $this->errors[$field]= $message;

        return $this;
        
    }
}