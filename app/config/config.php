<?php
return [
    'settings' => [
        // API Key
        'API_KEY' => 'your-256-bit-secret',
        'API_SECURE'=>true,

        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true,
        
        // monolog settings
        'logger' => [
            'name' => 'api',
            'path' => __DIR__ . '/../logs/api.log',
        ],


    ],
    'database'=>[
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'port'      => '8889',
        'database'  => 'slim_demo',
        'username'  => 'root',
        'password'  => 'root',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => ''
    ]
];


