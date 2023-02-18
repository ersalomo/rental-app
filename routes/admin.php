<?php

use Illuminate\Support\Facades\Route;
use App\Events\MessageCreated;


Route::group([
    'middleware' => ['auth:web'],
    'as' => 'admin.',
    'prefix' => 'admin'
], function () {
    // Route::view('dashboard', 'admin.dashboard');
    Route::view('chat', 'admin.chat')->name('chat');
    Route::get('dashboard', function () {
        MessageCreated::dispatch('Halllo');
        return view('admin.dashboard');
    });
    Route::view('data-cars', 'admin.data.table-cars')->name('data-cars');
    Route::view('add-car', 'admin.data.add-car')->name('add-car');
});
