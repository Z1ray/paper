<?php

use Illuminate\Support\Facades\Route;

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
    return view('enter');
});

Route::get('/student/{id}', 'App\Http\Controllers\MainController@student')->name('student');

Route::get('/student/{id}/addFile', 'App\Http\Controllers\MainController@addFile')->name('addFile');

Route::post('/student/{id}/addFile/post', 'App\Http\Controllers\MainController@addPost')->name('addPost');

Route::get('/update/{id}', 'App\Http\Controllers\MainController@update')->name('update');

Route::post('/update/{id}/updating','App\Http\Controllers\MainController@updateOne')->name('updateOne');

Route::get('/registrate','App\Http\Controllers\MainController@registrate')->name('reg');

Route::post('/registrate/post','App\Http\Controllers\MainController@post')->name('post');

Route::get('/teacher', 'App\Http\Controllers\MainController@teacher')->name('teacher');

