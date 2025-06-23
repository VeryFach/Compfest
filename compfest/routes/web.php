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

Route::get('/delivery', function () {
    return view('delivery', ['title' => 'Pengiriman']);
})->name('delivery');

Route::get('/nutrition', function () {
    return view('nutrition', ['title' => 'Nutrisi Info']);
})->name('nutrition');

Route::get('/meal-plans', function () {
    return view('meal-plans', ['title' => 'Rencana Makan']);
})->name('meal-plans');

Route::get('/delivery-area', function () {
    return view('delivery-area', ['title' => 'FAQ']);
})->name('delivery-area');