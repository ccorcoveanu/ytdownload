<?php
return [
    'settings' => [
        'displayErrorDetails' => false, // set to false in production

        'cache' => [
            'on' => true
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],
        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../public/ytheme/',
            'template_cache' => __DIR__ . '/../public/ytheme/t_cache',
            'template_compile' => __DIR__ . '/../public/ytheme/t_compile',
        ],

        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => '',
            'username' => '',
            'password' => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ],
];