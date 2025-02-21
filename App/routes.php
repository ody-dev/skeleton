<?php
declare(strict_types=1);

use Ody\Core\Facades\Route;

Route::get('/users', '\App\Http\Controllers\PostController:index');
Route::get('/users/{id}', '\App\Http\Controllers\PostController:find');
Route::post('/users', '\App\Http\Controllers\PostController:create');
Route::put('/users/{id}', '\App\Http\Controllers\PostController:update');

