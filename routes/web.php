<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/client', function () {
    return view('client');
})->name('client');

Route::get('/nav', function () {
    return view('nav');
})->name('nav');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/send-email', [EmailController::class, 'send'])->name('send.email');
