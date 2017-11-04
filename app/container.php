<?php

$container = $app->getContainer();

// Database
$container['pdo'] = function ($container) {

    $cfg = $container->get('settings')['db'];

    return new \Slim\PDO\Database($cfg['dsn'], $cfg['user'], $cfg['pass']);
};

// Monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings');
    $logger = new Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['logger']['path'], Monolog\Logger::DEBUG));
    return $logger;
};

$container['storage'] = function ($container) {

    $keys = $container->get('settings')['OAuth'];

    $cfg = $container->get('settings')['db'];
    return  new OAuth2\Storage\Pdo(array('dsn' =>$cfg["dsn"],
                                         'username' => $cfg["user"],
                                         'password' => $cfg["pass"]));

};