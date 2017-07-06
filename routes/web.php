<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Display a form:
Route::get('form', function () {
    return view('form');
});

// Process the form:
Route::post('form', function () {
    return request()->all();
});

Route::get('/posts/{post}/edit', 'PostsController@edit');
