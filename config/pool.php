<?php

return [
    "key" => "secret",
    "enable" => false,
    'host' => '127.0.0.1',
    'port' => 9504,
    'pool_size' => 32,
    'additional' => [
        'enable_delay_receive' => true,
        'daemonize' => false,
        'worker_num' => 4,
        'log_level' => 1,
        'log_file' => base_path('/storage/logs/ody_server.log'),
        'log_rotation' => SWOOLE_LOG_ROTATION_DAILY,
        'log_date_format' => '%Y-%m-%d %H:%M:%S',
    ],
    'allowed_ips' => [
        '127.0.0.1'
    ]
];