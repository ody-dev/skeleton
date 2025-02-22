<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Ody\Core\Http\JsonResponse;

class UserController
{
    public function __construct(private UserRepository $userRepository)
    {

    }
    public function index()
    {
        return JsonResponse::ok([
            "message" => "Test message",
            "body" => $this->userRepository->all()
        ]);
    }

    public function find($id)
    {
        return JsonResponse::ok([
            "message" => "Test message",
            "body" => $this->userRepository->find($id)
        ]);
    }

    public function create($request)
    {
        $user = User::query()->create(
            $request->getParsedBody()
        );

        return JsonResponse::ok([
            "message" => "User created",
            "body" => $user->refresh()
        ]);
    }

    public function update($request)
    {
        $user = User::query()->find($request->getAttribute('id'));
        $user->update($request->getParsedBody());

        return JsonResponse::ok([
            "message" => "User updated",
            "body" => $user->refresh()
        ]);
    }
}