<?php
namespace App\Http\Controllers;

use App\Models\User;
use Ody\Core\Http\JsonResponse;

class PostController
{
    public function index()
    {
        return JsonResponse::ok([
            "message" => "Test message",
            "body" => User::query()->get()
        ]);
    }

    public function find($request, $response, array $args)
    {
        return JsonResponse::ok([
            "message" => "Test message",
            "body" => User::query()->find($args['id'])
        ]);
    }

    public function create($request, $response, $args)
    {
        $user = User::query()->create(
            $request->getParsedBody()
        );

        return JsonResponse::ok([
            "message" => "User created",
            "body" => $user->refresh()
        ]);
    }

    public function update($request, $response, array $args)
    {
        $user = User::query()->find($args['id']);
        $user->update($request->getParsedBody());

        return JsonResponse::ok([
            "message" => "User updated",
            "body" => $user->refresh()
        ]);
    }
}