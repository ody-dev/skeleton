<?php
declare(strict_types=1);

use Ody\Core\Facades\Facade;

require __DIR__ . '/../vendor/autoload.php';

$app = \Ody\Core\DI\Bridge::create();
$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, false );
Facade::setFacadeApplication($app);

/**
 * Register DB config
 */
require __DIR__ . '/../App/routes.php';

/**
 * Register DB config
 */
require __DIR__ . '/../config/database.php';
