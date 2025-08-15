<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('user-signup', 'userSignup')->name('user.register');
    Route::get('user-login', 'userLogin')->name('user.login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('auth/{provider}', 'providerLogin')->name('auth.provider');
    Route::get('auth/{provider}/callback', 'providerAuthentication')->name('auth.provider-callback');
    Route::get('logout', 'authLogout')->name('auth.logout');
});
