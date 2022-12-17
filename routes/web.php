<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('index');
});

Route::get('admin/login', [AccountController::class, 'login'])->name('login');
Route::post('admin/login', [AccountController::class, 'authenticate']);
Route::post('admin/logout', [AccountController::class, 'logout']);
// Route::get('register', [AccountController::class, 'register']);
// Route::post('register', [AccountController::class, 'store']);

Route::get('dashboard', [AdminController::class, 'dashboard']);

Route::prefix('donor')->group(function(){
    Route::get('/', [DonorController::class, 'index']);
    Route::get('register', [DonorController::class, 'register']);
    Route::post('register', [DonorController::class, 'store']);
    Route::get('questionnaire', [DonorController::class, 'questionnaire']);
    Route::post('questionnaire', [DonorController::class, 'storeQuestionnaire']);
});