<?php

namespace App\Http\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as Handle;

class ExampleAfterMiddleware
{
    public function __invoke(Request $request, Handle $handler)
    {
        $response = $handler->handle($request);
        $response->getBody()->write('\n after middleware');

        return $response;
    }
}