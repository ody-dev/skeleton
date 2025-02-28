<?php
declare(strict_types=1);

//use Ody\Core\Facades\Route;

//use Ody\Core\Routing\Route;

use Ody\Core\Support\Route;

Route::get('/users', '\App\Http\Controllers\UserController@index');
Route::get('/users/{id}', '\App\Http\Controllers\UserController@find');
//Route::post('/users', '\App\Http\Controllers\UserController:create');
//Route::put('/users/{id}', '\App\Http\Controllers\UserController:update');
