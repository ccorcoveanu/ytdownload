<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'ytdownload',
            'username' => 'root',
            'password' => 'vagrant',
            'charset'   => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix'    => '',
        ],
        'cache' => [
            'on' => true
        ],
        'twilio' => [
            'sid' => 'AC72453e5898d234556172e2ad46725736',
            'token' => '7fca066d154302a80da2f58d02a3f304',
            'phone' => '+12568295034'
        ],
        'mailer' => [
            'system_email' => 'cristi.corcoveanu@gmail.com'
        ]
    ]
];