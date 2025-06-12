<?php
use App\Http\Controllers\TestimonialController;

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