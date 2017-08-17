<?php
require __DIR__ . '/../vendor/autoload.php';
 
$settings = require __DIR__ . '/../app/settings.php';

define('URL_BASE', "");

$app = new \Slim\App($settings);

require __DIR__ . '/../app/container.php';

require __DIR__ . '/../app/errorHandlers.php';

require __DIR__ . '/../app/controllers.php';

require __DIR__ . '/../app/middlewares.php';

require __DIR__ . '/../app/routes.php';

$app->run();