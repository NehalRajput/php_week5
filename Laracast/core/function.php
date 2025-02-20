<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die(); // Stop execution
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
{
    http_response_code($code);
    require BASE_PATH . "views/{$code}.php";

    die();
    // Stop script execution
}

function authorize($condition, $status = 403)
{
    if (! $condition) {
        abort($status);
    }
}

function bash_path($path)
{

    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require BASE_PATH . 'views/' . $path;
}

function redirect($path)
{
    header("location:{$path}");
    exit();

}

function old($key , $default = '')
{
    return core\Session::get('old')[$key] ?? $default;
     
}