<?php

return [
    'debug' => env('APP_DEBUG' , false),
    /*
     * The following services are created for better performance
     * in the program, only one object is created from them and
     * they can be used throughout the program
     */
    'services' => [
        \Ody\Swoole\Cache\Cache::class,
    ],

    'providers' => [
        \Ody\Core\ServiceProviders\RouteServiceProvider::class,
        \Ody\DB\ServiceProviders\DatabaseServiceProvider::class,
    ]
];