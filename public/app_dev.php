<?php
date_default_timezone_set('America/Sao_Paulo');


#ini_set('display_errors', 1);
#ini_set('display_startup_errors', 1);
#error_reporting(E_ALL);

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require __DIR__ . '/../vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

$settings = require __DIR__ . '/../app/settings_dev.php';

define("URL_BASE", "");

$app = new \Slim\App($settings);

require __DIR__ . '/../app/container.php';

require __DIR__ . '/../app/errorHandlers.php';

require __DIR__ . '/../app/controllers.php';

require __DIR__ . '/../app/middlewares.php';

require __DIR__ . '/../app/routes.php';

$app->run();
