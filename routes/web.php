<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return 'Welcome';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
}); 

Route::get('/about', function () {
    return '2241720145 - Muhammad Baihaqi Aulia Asyari';
}); 

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya ' . $name;
}); 

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . ' komentar ke-: ' . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Article Page with ID ' . $id;
});
