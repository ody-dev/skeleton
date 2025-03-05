<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function __construct(protected User $user)
    {}

    public function getAll()
    {
        return $this->user->query()->get();
    }

    public function find(int $id)
    {
        return $this->user->query()->find($id);
    }
}