<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::view('sign-up', 'auth.register')->name('sign-up');
Route::view('sign-in', 'auth.login')->name('sign-in');

Route::post('login', [AuthController::class, 'sign_in'])->name('login');
Route::post('register', [AuthController::class, 'sign_up'])->name('register');

Route::group([
    'middleware' => ['auth:web'],
    'as' => 'main.',
], function () {
    Route::view('main', 'content.main')->name('main');
    Route::view('detail', 'content.detail')->name('detail');
});
