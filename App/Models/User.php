<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $hidden = [
        'password',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];
}