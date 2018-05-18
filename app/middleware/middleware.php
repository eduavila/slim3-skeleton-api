<?php
/**
 *  Acessar API somente se possuir API_KEY
 * 
 */
$app->add(new \Slim\Middleware\JwtAuthentication([
    'regexp' => '/(.*)/', //Regex para encontrar o Token nos Headers - Livre
    'logger' => $container['logger'],
    'header' => 'X-API-KEY', //O Header que vai conter o token
    'path' => '/',
    'realm' => 'Protected', 
    'secret' => $config['settings']['API_KEY'] //Nosso secretkey criado 
]));