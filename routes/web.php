<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function(){
    Route::get('/', [App\Http\Controllers\SesiController::class, 'index'])->name('login');
    Route::post('/', [App\Http\Controllers\SesiController::class, 'login']);
});

Route::middleware((['auth']))->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/admin/operator', [AdminController::class, 'operator'])->middleware('useracess:operator');
    Route::get('/admin/keuangan', [AdminController::class, 'keuangan'])->middleware('useracess:keuangan');
    Route::get('/admin/marketing', [AdminController::class, 'marketing'])->middleware('useracess:marketing');
    Route::get('/logout',[SesiController::class,'logout']);
    
});