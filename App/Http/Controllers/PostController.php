<?php
namespace App\Http\Controllers;

use Ody\Core\Http\JsonResponse;

class PostController
{
    public function test()
    {
        return JsonResponse::ok([
            "message" => "Test message",
            "body" => "tttssss "
        ]);
    }
}