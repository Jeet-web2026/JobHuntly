<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('user-signup', 'userSignup')->name('user.register');
    Route::get('user-login', 'userLogin')->name('user.login');
    Route::redirect('login', 'user-signup')->name('login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('auth/{provider}', 'providerLogin')->name('auth.provider');
    Route::get('auth/{provider}/callback', 'providerAuthentication')->name('auth.provider-callback');
    Route::get('logout', 'authLogout')->name('auth.logout');
});


Route::middleware('auth:web')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('user-dashboard', 'index')->name('user.dashboard');

        Route::get('user-performance', 'performance')->name('user.performance');
        Route::prefix('user-performance')->group(function () {
            Route::get('search-appearance', 'searchapearance')->name('user.searchapearance');
            Route::get('recruter-actions', 'recruteractions')->name('user.recruteractions');
            Route::get('edit-profile', 'editprofile')->name('user.editprofile');
            Route::get('edit-professional-details', 'editeProfessionalDetails')->name('user.editprofessional-details');
            Route::post('edit-profile-save', 'editprofileSave')->name('user.user-details-save');
            Route::post('save-professional-details', 'saveeProfessionalDetails')->name('user.saveprofessional-details');
            Route::get('project-details', 'userProjectDetails')->name('user.projects-details');
        });

        Route::get('user-opportunities', 'opportunities')->name('user.opportunities');
        Route::get('user-help', 'help')->name('user.help');
        Route::get('user-settings', 'settings')->name('user.settings');
        Route::get('user-feedback', 'feedback')->name('user.feedback');
        Route::get('user-about', 'about')->name('user.about');
    });
});
