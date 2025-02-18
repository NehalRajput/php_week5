<?php

namespace core\middleware;

class Middleware
{
   public const MAP = [

       'guest'=> Guest::class,
       'auth' => Auth::class,
       
    ];

    public static  function resolve($key)
    {
        if(!$key)
        {
           return;
        }
        $middleware =static::MAP[$key];

        (new $middleware)->handle();
   
    }
}