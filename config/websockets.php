<?php
use Ody\Swoole\Event;

return [
    'host' => env('WEBSOCKET_HOST', '127.0.0.1'),
    'port' => env('WEBSOCKET_PORT', 9502),
    'sock_type' => SWOOLE_SOCK_TCP,
    'callbacks' => [
        Event::ON_HAND_SHAKE => [\Ody\Swoole\Websockets\Server::class, 'onHandShake'],
        Event::ON_MESSAGE => [\Ody\Swoole\Websockets\Server::class, 'onMessage'],
        Event::ON_CLOSE => [\Ody\Swoole\Websockets\Server::class, 'onClose'],
        Event::ON_REQUEST => [\Ody\Swoole\Websockets\Server::class, 'onRequest'],
        Event::ON_DISCONNECT => [\Ody\Swoole\Websockets\Server::class, 'onDisconnect'],
    ],
    "additional" => [
        "worker_num" => env('APP_WEBSOCKET_WORKER_NUM', cpu_count() * 2),
    ]
];