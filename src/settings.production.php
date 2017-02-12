<?php
return [
    'settings' => [
        'displayErrorDetails' => false, // set to false in production
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'direktkliniken_api',
            'username' => 'd_api',
            'password' => '107sr6mI48r*',
            'charset'   => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix'    => '',
        ],
        'cache' => [
            'on' => true
        ],
        'twilio' => [
            'sid' => 'ACde7b06cb99de9e86357bf9180a40e1ad',
            'token' => '75c1a11d1283b0f65c97da93612f9574',
            'phone' => '+46769449621'
        ],
        'mailer' => [
            'system_email' => 'info@direktkliniken.se'
        ]
    ]
];