<?php
declare(strict_types=1);

use Ody\Core\Facades\Route;

Route::get('/test', '\App\Http\Controllers\PostController:test');

