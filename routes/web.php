<?php

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');

Route::get('/{url}', 'FileController@downloadPage');
Route::get('/{url}/download', 'FileController@download');
Route::post('/{url}/download', 'FileController@download');

Route::post('/zip/{hash}', 'FileController@zip');

Route::post('/upload', 'FileController@upload');
