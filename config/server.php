<?php

return [
    'mode' => SWOOLE_BASE,
    'host' => env('HTTP_SERVER_HOST' , '127.0.0.1'),
    'port' => env('HTTP_SERVER_PORT' , 9501) ,
    'sock_type' => SWOOLE_SOCK_TCP,
    'additional' => [
        'worker_num' => env('HTTP_SERVER_WORKER_COUNT' , swoole_cpu_num() * 2) ,
        /*
         * log level
         * SWOOLE_LOG_DEBUG (default)
         * SWOOLE_LOG_TRACE
         * SWOOLE_LOG_INFO
         * SWOOLE_LOG_NOTICE
         * SWOOLE_LOG_WARNING
         * SWOOLE_LOG_ERROR
         */
        'log_level' => SWOOLE_LOG_DEBUG ,
        'log_file' => storagePath('logs/ody_server.log') ,
        'open_http_protocol' => true,
        'enable_coroutine' => false
    ],

    'ssl' => [
        'ssl_cert_file' => null ,
        'ssl_key_file' => null ,
    ] ,

    /*
     * Files and folders that must be changed in real time
     */
    'watcher' => [
        'App',
        'config',
        'database',
        'composer.lock',
        '.env',
    ] 
];
