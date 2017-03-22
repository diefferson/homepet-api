<?php
require __DIR__ . '/../vendor/autoload.php';

// Configuracoes 
$settings = require __DIR__ . '/../app/settings.php';

$app = new \Slim\App($settings);

// Dependencias 
require __DIR__ . '/../app/container.php';

//Controllers 
require __DIR__ . '/../app/controllers.php';

//Middlewares
require __DIR__ . '/../app/middlewares.php';

//Rotas da api
require __DIR__ . '/../app/routes.php';

$app->run();