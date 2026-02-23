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


