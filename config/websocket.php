<?php

use Ody\Websocket\WsEvent;

return [
    'mode' => SWOOLE_BASE,
    'host' => env('WEBSOCKET_HOST', '127.0.0.1'),
    'port' => env('WEBSOCKET_PORT', 9502),
    'sock_type' => SWOOLE_SOCK_TCP,
    'callbacks' => [
        WsEvent::ON_HAND_SHAKE => [\Ody\Websocket\WsServerCallbacks::class, 'onHandShake'],
        WsEvent::ON_WORKER_START => [\Ody\Websocket\WsServerCallbacks::class, 'onWorkerStart'],
        WsEvent::ON_MESSAGE => [\Ody\Websocket\WsServerCallbacks::class, 'onMessage'],
        WsEvent::ON_CLOSE => [\Ody\Websocket\WsServerCallbacks::class, 'onClose'],
        WsEvent::ON_REQUEST => [\Ody\Websocket\WsServerCallbacks::class, 'onRequest'],
        WsEvent::ON_DISCONNECT => [\Ody\Websocket\WsServerCallbacks::class, 'onDisconnect'],
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
        'log_file' => storagePath('logs/ody_websockets.log'),
        'open_websocket_ping_frame' => true,
        'open_websocket_pong_frame' => true,
        'daemonize' => false,
    ],
    'ssl' => [
        'ssl_cert_file' => null ,
        'ssl_key_file' => null ,
    ] ,
];