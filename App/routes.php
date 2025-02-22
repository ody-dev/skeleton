<?php
declare(strict_types=1);

use Ody\Core\Facades\Route;

Route::get('/users', '\App\Http\Controllers\UserController:index');
Route::get('/users/{id}', '\App\Http\Controllers\UserController:find');
Route::post('/users', '\App\Http\Controllers\UserController:create');
Route::put('/users/{id}', '\App\Http\Controllers\UserController:update');
