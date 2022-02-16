<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrackingController;

Route::get('/', [AuthController::class, 'index'])->name('index');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/signup', [AuthController::class, 'signupPage'])->name('signupPage');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

Route::group(['middleware' => 'auth.api'], function () {
    Route::delete('logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'home'], function () {
        Route::get('/', [HomeController::class, 'index'])->name('home.index');
    });

    Route::resource('trackings', TrackingController::class);
    Route::get('/trackings-datatables', [TrackingController::class, 'datatables'])->name('trackings.datatables');
});
