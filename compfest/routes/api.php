<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Subscription Routes
Route::post('/subscriptions', [SubscriptionController::class, 'store']);

// Testimonial Routes
Route::prefix('testimonials')->group(function () {
    // Public routes
    Route::get('/', [TestimonialController::class, 'index']);
    Route::post('/', [TestimonialController::class, 'store']);
    
    // Admin routes (add authentication middleware)
    Route::middleware(['auth:sanctum', 'admin'])->group(function () {
        Route::get('/admin', [TestimonialController::class, 'adminIndex']);
        Route::patch('/{id}/approve', [TestimonialController::class, 'approve']);
        Route::delete('/{id}', [TestimonialController::class, 'destroy']);
    });
});