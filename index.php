<?php
header('Access-Control-Allow-Origin: *');

if (empty($_SERVER['HTTPS']))
{
    $get = "GET";
}
else
{
    $get = "GETS";
}

$path = @parse_url($_SERVER['REQUEST_URI'])['path'];

if ( substr ( $path , -1 ) === "/" )
{
    $path .= 'index';
}

$paths = strtolower ( $path );

if ( $paths == "/index.php" )
{
    $paths = "/index";
}

$files = __DIR__ . $paths;

if ( file_exists($files) && is_file($files) )
{
    require $files;
}
else
{
    require "404";
}
