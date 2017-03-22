<?php
return [
    // Slim Settings
    'settings' => [
        'displayErrorDetails' => false,
        'desenvolvimento' => false,

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

        // db settings
        'db'=>[
            'desenv' =>[
                'dsn' => 'mysql:host=localhost;dbname=api_mct;charset=utf8',
                'host'   => "localhost",
                'user'   => "",
                'pass'   => "",
                'dbname' => ""
            ],
            'prod' =>[
                'dsn' => 'mysql:host=mysql.hostinger.com.br;dbname=u323617141_api;charset=utf8',
                'host'   => "mysql.hostinger.com.br",
                'user'   => "",
                'pass'   => "",
                'dbname' => ""
            ]
        ],    
    ],

];