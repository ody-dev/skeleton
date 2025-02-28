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
    'service_providers' => [
        \Ody\HttpServer\ServiceProviders\HttpServerServiceProvider::class,
        \Ody\Websocket\ServiceProviders\WebsocketServiceProvider::class,
    ]
];