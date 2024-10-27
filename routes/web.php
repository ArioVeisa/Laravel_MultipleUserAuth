<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\SesiController::class, 'index']);
Route::post('/', [App\Http\Controllers\SesiController::class, 'login']);