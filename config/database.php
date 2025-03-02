<?php

return [
    'migration_dirs' => [
        'migrations' => 'database/migrations',
    ],
    'environments' => [
        'local' => [
            'adapter' => 'mysql',
            'host' => env('DB_HOST' , false),
            'port' => env('DB_PORT' , false), // optional
            'username' => env('DB_USERNAME' , false),
            'password' => env('DB_PASSWORD' , false),
            'db_name' => env('DB_DATABASE' , false),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_general_ci', // optional, if not set default collation for utf8mb4 is used
            'prefix'    => ''
        ],
        'production' => [
            'adapter' => 'mysql',
            'host' => 'production_host',
            'port' => 3306, // optional
            'username' => 'user',
            'password' => 'pass',
            'db_name' => 'my_production_db',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_general_ci', // optional, if not set default collation for utf8mb4 is used
        ],
    ],
    'default_environment' => 'local',
    'log_table_name' => 'migrations_log',
];
