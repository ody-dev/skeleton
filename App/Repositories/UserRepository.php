<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function all()
    {
        return User::query()->get();
    }

    public function find(int $id)
    {
        return User::query()->find($id);
    }
}