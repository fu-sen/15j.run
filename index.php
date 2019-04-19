<?php

$ua = isset($_SERVER['HTTP_USER_AGENT'])? $_SERVER['HTTP_USER_AGENT'] : '';

if (stripos($ua, 'MixJuice') === false)
{
    header("Location: https://github.com/fu-sen/15jr.tk", true, 301);

    exit;
}

$path = @parse_url($_SERVER['REQUEST_URI'])['path'];

if ( substr ( $path , -1 ) === "/" )
{
    $path .= 'index.html';
}

$paths = strtolower ( $path );
$files = __DIR__ . "/www" . $paths;

if ( file_exists($files) && is_file($files) )
{
    require $files;
}
else
{
    require "404.php";
}
