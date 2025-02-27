<?php
var_dump(env('APP_DEBUG'));
return [
    'debug' => env('APP_DEBUG' , false),
    'environment' => env('APP_ENV', 'local'),
    'services' => [], // Register services in a container instance
];