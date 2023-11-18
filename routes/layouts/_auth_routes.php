<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/**************** Authentifiaction routes *****************/

Route::prefix('auth')->group(function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/registerSave', [AuthController::class, 'registerSave'])->name('register.save');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/loginAction', [AuthController::class, 'loginAction'])->name('login.action');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
});