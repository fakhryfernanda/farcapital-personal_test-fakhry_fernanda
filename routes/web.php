<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('index');
});

Route::get('login', [AccountController::class, 'login'])->name('login');
Route::post('login', [AccountController::class, 'authenticate']);
Route::post('logout', [AccountController::class, 'logout']);
Route::get('register', [AccountController::class, 'register']);
Route::post('register', [AccountController::class, 'store']);

Route::prefix('donor')->group(function(){
    Route::get('/', [DonorController::class, 'index']);
    Route::get('register', [DonorController::class, 'register']);
    Route::post('register', [DonorController::class, 'store']);
});