<?php

namespace Ody\Core\Facades;

use Ody\Core\App;

final class Route extends Facade
{
    /**
     * Overriding Facades::self() to set Slim\App instance is in order to tell
     * Facades to proxy it.
     * These facades are same to App. Because of the $container['router']
     * (Instance of \Slim\Interfaces\RouterInterface) did not support many
     * function like $app->get() and so on.  So I repeat it and it is named
     * "Route".
     * @return App
     */
    public static function self(): App
    {
        return self::$app;
    }
}