<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

// Single Action Controllers (tanpa __invoke)
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);

// WelcomeController
Route::get('/hello', [WelcomeController::class, 'hello']);

// Other Routes
Route::get('/world', function () {
    return 'World';
});
Route::get('/welcome', function () {
    return 'Selamat datang di website saya';
});
Route::get('/nim-nama', function () {
    return 'NIM : 244107020184 Nama : Aldi Surya Saputra';
});
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . ' Komentar ke-: ' . $commentId;
});
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});
