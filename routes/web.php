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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/serv', function () {return view('serv');})->name("serv");
Route::get('/blo', function () {return view('blo');})->name("blo");
Route::get('/contac', function () {return view('contac');})->name("contac");
Route::get('/index', function () {return view('index');})->name("index");
Route::get('/post', function () {return view('post');})->name("post");


