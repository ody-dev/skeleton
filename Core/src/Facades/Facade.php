<?php

namespace Ody\Core\Facades;

use Ody\Core\App;

class Facade
{
    /**
     * When you're writing the facades extended Facades, you can use "self::$app"
     * to get anything you want.
     * @var App $app slim app instance.
     */
    public static $app;

    /**
     * @param App $app
     */
    public static function setFacadeApplication($app)
    {
        Facade::$app = $app;
    }

    public static function __callStatic($method, $args)
    {
        return static::self()->$method(...$args);
    }

    /**
     * Set the service name to static proxy.
     * You can override this function to set a facade for the service name you
     * returned.
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return '';
    }

    /**
     * Set the instance which needs facades.
     * You can override this function to set a facade for the instance you
     * returned.
     * @return mixed
     */
    public static function self()
    {
        return Facade::$app->getContainer()->get(static::getFacadeAccessor());
    }
}