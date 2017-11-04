<?php
return [

    'settings' => [

        'displayErrorDetails' => true,

        'view' => [
            'template_path' => __DIR__ . '/templates',
            'twig' => [
                'cache' => __DIR__ . '/../cache/twig',
                'debug' => false,
                'auto_reload' => true,
            ],
        ],

        // monolog settings
        'logger' => [
            'name' => 'app',
            'path' => __DIR__ . '/../log/app.log',
        ],   

        // db desenv settings
        'db'=>[
            'dsn' => 'mysql:host=localhost;dbname=homepet_db;charset=utf8',
            'host'   => "localhost",
            'user'   => "root",
            'pass'   => "root",
            'dbname' => "homepet_db"
        ], 

        'OAuth' =>[
            'public_key'  => file_get_contents('../key/pubkey.pem'),
            'private_key' => file_get_contents('../key/privkey.pem'),
        ],
    ],
];