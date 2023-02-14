<?php

use Illuminate\Support\Facades\Route;


Route::group([
    'prefix' => 'admin'
], function () {
    Route::view('dashboard', 'admin.dashboard');
    Route::view('chat', 'admin.chat')->name('chat');
});
