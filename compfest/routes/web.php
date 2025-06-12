<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Beranda']);
})->name('home');

Route::get('/menu', function () {
    return view('menu', ['title' => 'Menu']);
})->name('menu');

Route::get('/subscribe', function () {
    return view('subscribe', ['title' => 'Berlangganan']);
})->name('subscribe');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Hubungi Kami']);
})->name('contact');