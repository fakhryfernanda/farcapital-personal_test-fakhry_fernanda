<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('index');
});

Route::get('admin/login', [AccountController::class, 'login'])->name('login')->middleware('guest');
Route::post('admin/login', [AccountController::class, 'authenticate']);
Route::post('admin/logout', [AccountController::class, 'logout']);
// Route::get('register', [AccountController::class, 'register']);
// Route::post('register', [AccountController::class, 'store']);

Route::prefix('dashboard')->group(function(){
    Route::get('/', [AdminController::class, 'dashboard'])->middleware('auth');
    Route::get('donor/{id}', [AdminController::class, 'findDonor'])->middleware('auth');
    Route::get('form-kesehatan/{id}', [AdminController::class, 'form'])->middleware('auth');
});

Route::prefix('donor')->group(function(){
    Route::get('/', [DonorController::class, 'index']);
    Route::get('register', [DonorController::class, 'register']);
    Route::post('register', [DonorController::class, 'store']);
    Route::get('questionnaire', [DonorController::class, 'questionnaire']);
    Route::post('questionnaire', [DonorController::class, 'storeQuestionnaire']);
    Route::post('form-kesehatan', [DonorController::class, 'formKesehatan']);
    Route::put("/update/{id}", [DonorController::class, 'update']);

});