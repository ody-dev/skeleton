<?php
declare(strict_types=1);

use Ody\Core\Env;
use Ody\Core\Facades\Facade;
use Ody\DB\Eloquent;

require __DIR__ . '/../vendor/autoload.php';

Env::load(__DIR__ . '/../');

$app = \Ody\Core\DI\Bridge::create();
$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();
$app->addErrorMiddleware((bool) $_ENV['DEBUG'], (bool) $_ENV['DEBUG'], (bool) $_ENV['DEBUG']);
Facade::setFacadeApplication($app);

/**
 * Register routes
 */
require __DIR__ . '/../App/routes.php';

/**
 * Register DB
 */
Eloquent::boot(require __DIR__ . '/../config/database.php');
