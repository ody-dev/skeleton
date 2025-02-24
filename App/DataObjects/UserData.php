<?php

namespace App\DataObjects;

use Spatie\LaravelData\Data;

class UserData extends Data
{
    public ?int $id;
    public ?string $firstName;
    public ?string $lastName;
}