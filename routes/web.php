<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () { return view('about'); });

Route::get('/blogs', function () { return view('blogs'); });

Route::get('/contact', function () { return view('contact'); });

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::post('/send-otp',[ContactController::class,'sendOtp']);
Route::post('/verify-otp',[ContactController::class,'verifyOtp']);
Route::post('/contact-send',[ContactController::class,'send']);