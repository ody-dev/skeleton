<?php
namespace App\Http;

use Ody\Core\Foundation\HttpKernel as Kernel;
use Ody\Core\Foundation\Middleware\BodyParsingMiddleware;

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