<?php
declare(strict_types=1);

use Ody\Core\Env;
use Ody\Core\Facades\Facade;

require __DIR__ . '/../vendor/autoload.php';

Env::load(__DIR__ . '/../');

$app = \Ody\Core\DI\Bridge::create();
$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();
$app->addErrorMiddleware((bool) $_ENV['APP_DEBUG'], (bool) $_ENV['APP_DEBUG'], (bool) $_ENV['APP_DEBUG']);
Facade::setFacadeApplication($app);

/**
 * Register routes
 */
require __DIR__ . '/../App/routes.php';

/**
 * Register DB
 */
if (class_exists('Ody\DB\Eloquent')) {
    \Ody\DB\Eloquent::boot(config('database')['environments'][$_ENV['APP_ENV']]);
}
