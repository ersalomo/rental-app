<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::post('sign-up', [AuthController::class, 'sign_up'])->name('sign-up');
Route::post('sign-in', [AuthController::class, 'sign_in'])->name('sign-in');
