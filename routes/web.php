<?php

use App\Http\Controllers\FileController;

Route::get('/', function () {
    Session::put('hash', Str::random(20));
    return view('home');
});

Route::get('/{url}', [FileController::class, 'downloadPage']);
Route::get('/{url}/download', [FileController::class, 'download']);
Route::post('/{url}/download', [FileController::class, 'download']);

Route::post('/zip/{hash}', [FileController::class, 'zip']);

Route::post('/upload', [FileController::class, 'upload']);
