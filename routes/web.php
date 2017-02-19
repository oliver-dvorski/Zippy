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
    Session::put('hash', str_random(20));
    return view('home');
});

Route::get('/{url}', 'FileController@downloadPage');
Route::get('/{url}/download', 'FileController@download');

Route::post('/zip/{hash}', 'FileController@zip');

Route::post('/upload', 'FileController@upload');