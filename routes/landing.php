<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing-page.home');
Route::view('/about', 'landing-page.about');
Route::view('/services', 'landing-page.services');
Route::view('/pricing', 'landing-page.pricing');
Route::view('/car', 'landing-page.car');
Route::view('/contact', 'landing-page.contact');
