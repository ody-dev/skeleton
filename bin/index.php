<?php
declare(strict_types=1);

use Ody\Core\Facades\Facade;
use Ody\Swoole\HotCodeReloader;
use Ody\Swoole\ServerRequestFactory;
use Ody\Swoole\FileWatchers\InotifyWatcher;

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

/**
 * Instanciate Swoole Http Server
 */
$server = new \Swoole\Http\Server('localhost', 9501);
$server->on('start', function ($server) {
    echo "Server started on http://" . $server->host . ":" . $server->port . PHP_EOL;
    $watcher = new InotifyWatcher();
    $watcher->addFilePath('/home/ilyas/script/ody/App');

    // Reloader tracks the changes every 1000 ms.
    $reloader = new HotCodeReloader($watcher, $server, 1000);
    $reloader->start();
});

$server->on('request', ServerRequestFactory::createRequestCallback($app));
$server->set([
    "reactor_num" => 2,
    "worker_num" => 2,
]);
$server->start();

//$serverRequestCreator = ServerRequestCreatorFactory::create();
//$request = $serverRequestCreator->createServerRequestFromGlobals();
//
//$response = $app->handle($request);
//$responseEmitter = new ResponseEmitter();
//$responseEmitter->emit($response);
