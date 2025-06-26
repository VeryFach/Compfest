<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::prefix('berlangganan')->group(function () {
    Route::get('/', [SubscriptionController::class, 'index'])->name('subscription.index');
    Route::post('/', [SubscriptionController::class, 'store'])->name('subscription.store');
    Route::get('/{id}', [SubscriptionController::class, 'show'])->name('subscription.show');
});

// Testimonial Routes
Route::prefix('testimonial')->group(function () {
    Route::get('/', [TestimonialController::class, 'index'])->name('testimonial.index');
    Route::post('/', [TestimonialController::class, 'store'])->name('testimonial.store');
});

// Admin Routes (optional)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/subscriptions', [SubscriptionController::class, 'list'])->name('admin.subscriptions');
    Route::patch('/subscriptions/{id}/status', [SubscriptionController::class, 'updateStatus'])->name('admin.subscription.status');
    Route::get('/testimonials', [TestimonialController::class, 'adminList'])->name('admin.testimonials');
});

Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware(['auth'])->name('dashboard');

// Group untuk user biasa
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [AuthController::class, 'userDashboard'])
        ->name('user.dashboard');
    // Route lainnya untuk user
});

// Group untuk admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');
    // Route lainnya untuk admin
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

// Dashboard route
Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

Route::get('/profile', [ProfileController::class, 'edit'])
    ->middleware('auth')
    ->name('profile.edit');

require __DIR__.'/auth.php';

Route :: get('/guest', function () {
    return view('guest', ['title' => 'Guest Page']);
})->name('guest');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile');
});