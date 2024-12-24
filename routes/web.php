<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman Home
Route::get('/', function () {
    return view('index');
})->name('index');

// Route untuk halaman Services
Route::get('/services', function () {
    return view('services');
})->name('services');

// Route untuk halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route untuk halaman Package
Route::get('/package', function () {
    return view('package');
})->name('package');

// Route untuk halaman Payment
Route::get('/payment', function () {
    return redirect('http://billing.taskasarananusantara.net');
})->name('payment');

// Route untuk halaman Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return redirect('https://billing.taskasarananusantara.net/auth');
})->name('login');


