<?php

$publicPath = getcwd();

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

if ($uri !== '/' && file_exists($publicPath . $uri)) {
    return false;
}

$file = is_dir($publicPath . '/demo') ? '/demo' : '/public';

require_once $publicPath . $file . '/index.php';
