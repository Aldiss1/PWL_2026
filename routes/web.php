<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
return 'World';
});
Route::get('/welcome', function () {
    return 'Selamat datang di website saya';
});

Route::get('/nim-nama', function () {
    return 'NIM : 244107020184 Nama : Aldi Surya Sap';
});

Route::get('/user/{name}', function ($name) {
return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
return 'Halaman Artikel dengan ID '.$id;
});
