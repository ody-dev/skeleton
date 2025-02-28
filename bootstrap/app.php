<?php

use DI\Container;
use Ody\Core\App;
use Ody\Core\Env;
use Ody\Core\ServiceProviders\ServiceProvider;

define('PROJECT_PATH' , realpath('../'));

$app = App::create(new Container());

return \App\Http\HttpKernel::bootstrap($app)
    ->getApplication();
