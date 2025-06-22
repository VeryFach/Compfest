<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/testimonials', function () {
    return view('testimonials', ['title' => 'Testimoni']);
})->name('testimonials');

Route::get('/about', function () {
    return view('about', ['title' => 'Tentang Kami']);
})->name('about');