<?php

use Ody\Core\Facades\Facade;
use Ody\Core\Factory\AppFactory;
use Ody\Core\Swoole\FileWatchers\InotifyWatcher;
use Ody\Core\Swoole\HotCodeReloader;
use Ody\Core\Swoole\ServerRequestFactory;

require __DIR__ . '/../vendor/autoload.php';

$server = new \Swoole\Http\Server('localhost', 9501);
$app = AppFactory::create();
//$app->get('/test', '\App\Http\Controllers\PostController:test');
Facade::setFacadeApplication($app);

// Register routes
require __DIR__ . '/../App/routes.php';

// Register DB config
require __DIR__ . '/../config/database.php';

$app->get('/{path:.*}', function ($request, $response, array $args) {
    // do stuff ...
});

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
