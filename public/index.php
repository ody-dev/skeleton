<?php

use DI\Container;
use Ody\Core\Foundation\App;
use Ody\Core\Foundation\Bootstrap;

require_once __DIR__ . '/../vendor/autoload.php';

define('PROJECT_PATH' , realpath('../'));

$app = Bootstrap::init(
    App::create(new Container())
);

$app->run();
