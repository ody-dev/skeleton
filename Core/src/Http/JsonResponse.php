<?php
namespace Ody\Core\Http;

use Nyholm\Psr7\Response as Psr7Response;

class JsonResponse
{
    private static function response(int $statusCode, $data = null): Psr7Response
    {
        $body = $data ? json_encode($data) : '';

        return new Psr7Response(
            $statusCode, ['Content-Type' => 'application/json'], $body
        );
    }
    public static function ok($data)
    {
        return self::response(200, $data);
    }
}