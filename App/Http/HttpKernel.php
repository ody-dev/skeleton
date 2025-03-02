<?php
namespace App\Http;

use Ody\Core\Foundation\HttpKernel as Kernel;

class HttpKernel extends Kernel
{
    /**
     * Global middleware
     *
     * @var array
     */
    public array $middleware = [
//        Middleware\ExampleBeforeMiddleware::class,
//        Middleware\ExampleAfterMiddleware::class,
    ];

    public array $routeGroupMiddleware = [];

    public array $middlewareGroups = [
        'api' => [],
        'web' => []
    ];
}