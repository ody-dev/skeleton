<?php

use Ody\Websocket\WsEvent;

return [
    'host' => env('WEBSOCKET_HOST', '127.0.0.1'),
    'port' => env('WEBSOCKET_PORT', 9502),
    'sock_type' => SWOOLE_SOCK_TCP,
    'callbacks' => [
        WsEvent::ON_HAND_SHAKE => [\Ody\Websocket\Server::class, 'onHandShake'],
        WsEvent::ON_MESSAGE => [\Ody\Websocket\Server::class, 'onMessage'],
        WsEvent::ON_CLOSE => [\Ody\Websocket\Server::class, 'onClose'],
        WsEvent::ON_REQUEST => [\Ody\Websocket\Server::class, 'onRequest'],
        WsEvent::ON_DISCONNECT => [\Ody\Websocket\Server::class, 'onDisconnect'],
    ],
    'secret_key' => env('WEBSOCKET_SECRET_KEY', '123123123'),
    "additional" => [
        "worker_num" => env('WEBSOCKET_WORKER_COUNT', swoole_cpu_num() * 2),
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
        'log_file' => storagePath('logs/ody_websockets.log') ,
    ]
];