<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('register', function () {
    return view('donor/register');
});

Route::prefix('donor')->group(function(){
    Route::get('/', [DonorController::class, 'index']);
    // Route::get('register', [DonorController::class, 'register']);
});