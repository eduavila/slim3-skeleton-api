<?php

# === Para mostrar todos erros
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors','On');

// To help the built-in PHP dev server, check if the request was actually for
// something which should probably be served as a static file
if (PHP_SAPI === 'cli-server' && $_SERVER['SCRIPT_FILENAME'] !== __FILE__) {
    return false;
}

require __DIR__ . '/../vendor/autoload.php';

// Instantiate the app
$config = require __DIR__ . '/../app/config/config.php';
$app = new \Slim\App($config);

require __DIR__. '/../app/autoload.php';

// Inicia Applicação
$app->run();

