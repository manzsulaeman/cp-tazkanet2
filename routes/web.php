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

// Route untuk halaman Soho
Route::get('/soho', function () {
    return view('soho');
})->name('soho');

// Route untuk halaman Why Us
Route::get('/whyus', function () {
    return view('whyus');
})->name('whyus');

// Route untuk halaman Dedicated
Route::get('/dedicated', function () {
    return view('dedicated');
})->name('dedicated');

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

// Route untuk halaman Login
Route::get('/login', function () {
    return redirect('https://billing.taskasarananusantara.net/auth');
})->name('login');

// Routes for Tools
Route::get('/tools/speedtest', function () {
    return redirect('https://taska.speedtestcustom.com/');
})->name('tools.speedtest');

Route::get('/tools/bgp-maps', function () {
    return redirect('https://bgp.he.net/AS152775');
})->name('tools.bgp-maps');

Route::get('/tools/looking-glass', function () {
    return redirect('https://lg.taskasarananusantara.net/');
})->name('tools.looking-glass');

Route::get('/tools/peeringdb', function () {
    return redirect('https://www.peeringdb.com/net/36679');
})->name('tools.peeringdb');

Route::get('/tools/mrtg', function () {
    return redirect('https://zabbix.taskasarananusantara.net/');
})->name('tools.mrtg');
