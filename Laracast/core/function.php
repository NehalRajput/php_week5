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
    if ($code == 403) {
        require BASE_PATH . "views/403.php";
    } else {
        require BASE_PATH . "views/404.php";
    }
    exit(); // Stop script execution
}

function authorize($condition, $status = 403) {
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
