<?php
namespace App\Http\Controllers;

use App\Models\User;
use Ody\Core\Http\JsonResponse;

class PostController
{
    public function test()
    {
        $user = new User();
        $user = $user->find(2);

        return JsonResponse::ok([
            "message" => "Test message",
            "body" => $user
        ]);
    }
}