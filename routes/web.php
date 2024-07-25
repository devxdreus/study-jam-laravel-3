<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Postcontroller::class, 'index']);
Route::get('/posts/create', [Postcontroller::class, 'create']);
Route::get('/posts/{post}', [Postcontroller::class, 'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [Postcontroller::class, 'update']);
Route::delete('/posts/{post}', [Postcontroller::class, 'destroy']);
