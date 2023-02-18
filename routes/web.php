<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController, MainController, DetailCarController};


Route::view('sign-up', 'auth.register')->name('sign-up');
Route::view('sign-in', 'auth.login')->name('sign-in');

Route::post('login', [AuthController::class, 'sign_in'])->name('login');
Route::post('register', [AuthController::class, 'sign_up'])->name('register');

Route::group([
    'middleware' => ['auth:web'],
    'as' => 'main.',
], function () {
    Route::get('main', MainController::class)->name('main');
    Route::get('detail', DetailCarController::class)->name('detail');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
