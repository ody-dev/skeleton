<?php

namespace Ody\Core\Swoole;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Ody\Core\App;

class ServerRequestFactory
{
    public static function createRequestCallback(App $app): RequestCallback
    {
        return RequestCallback::fromCallable(
            static fn (ServerRequestInterface $request): ResponseInterface => $app->handle($request)
        );
    }
}