<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;

Route::get('/', function () {
    return view('home', ['title' => 'Beranda']);
})->name('home');

Route::get('/menu', function () {
    return view('menu', ['title' => 'Menu']);
})->name('menu');

Route::get('/subscriptions', function () {
    return view('subscriptions', ['title' => 'Berlangganan']);
})->name('subscriptions');

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

// Subscription routes
Route::prefix('subscriptions')->group(function () {
    // Show subscription form
    Route::get('/berlangganan', [SubscriptionController::class, 'index'])->name('subscriptions.index');
    
    // Handle form submission
    Route::post('/', [SubscriptionController::class, 'store'])->name('subscriptions.store');
    
    // Calculate price (AJAX)
    Route::post('/calculate-price', [SubscriptionController::class, 'calculatePrice'])->name('subscriptions.calculate');
    
    // View subscription details
    Route::get('/{id}', [SubscriptionController::class, 'show'])->name('subscriptions.show');
});

// Admin routes (with auth middleware)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Admin subscription management
    Route::get('/subscriptions', [SubscriptionController::class, 'list'])->name('admin.subscriptions');
    Route::get('/subscriptions/statistics', [SubscriptionController::class, 'statistics'])->name('admin.subscriptions.stats');
    Route::patch('/subscriptions/{id}/status', [SubscriptionController::class, 'updateStatus'])->name('admin.subscriptions.status');
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
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // other admin routes...
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
});

// Password reset routes
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');