<?php

use Core\Response;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = Response::NotFound)
{
    http_response_code($code);

    $file = base_path("views/{$code}.php");

    if (file_exists($file)) {
        require $file;
    } else {
        echo "file \"$file\" not found!";
    }

    die();
}

function authorize($condition, $status = Response::Forbidden)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/' . $path);
}

function redirect($url)
{
    header("location: {$url}");
    exit();
}
