<?php

$path = @parse_url($_SERVER['REQUEST_URI'])['path'];

if ($path === '/')
{
    $path = '/index.html';
}

$files = __DIR__ . "/www" . $path;

if ( file_exists($files) && is_file($files) )
{
    require $files;
}
else
{
    require "404.php";
}
