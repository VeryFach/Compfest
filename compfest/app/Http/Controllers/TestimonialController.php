<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display testimonials for public view
     */
    public function index(): JsonResponse
    {
        try {
            $testimonials = Testimonial::approved()
                ->latest()
                ->limit(10)
                ->get();

            return response()->json([
                'success' => true,
                'data' => $testimonials
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to load testimonials'
            ], 500);
        }
    }

    /**
     * Store a new testimonial
     */
    public function store(Request $request): JsonResponse
    {
        try {
            // Validation rules
            $validator = Validator::make($request->all(), [
                'customer_name' => 'required|string|max:255',
                'customer_location' => 'nullable|string|max:255',
                'rating' => 'required|integer|min:1|max:5',
                'review_message' => 'required|string|max:1000'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 422);
            }

            // Rate limiting (optional)
            $ip = $request->ip();
            $recentTestimonials = Testimonial::where('created_at', '>', now()->subHours(24))
                ->get();
            
            // Simple rate limiting check (you might want to use Redis for this)
            if ($recentTestimonials->count() >= 3) {
                return response()->json([
                    'success' => false,
                    'message' => 'Too many reviews submitted. Please try again later.'
                ], 429);
            }

            // Create testimonial
            $testimonial = Testimonial::create([
                'customer_name' => $request->customer_name,
                'customer_location' => $request->customer_location,
                'rating' => $request->rating,
                'review_message' => $request->review_message,
                'is_approved' => false // Requires admin approval
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your review! It will be published after approval.',
                'data' => $testimonial
            ], 201);

        } catch (\Exception $e) {
            \Log::error('Testimonial creation failed: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Failed to submit testimonial. Please try again.'
            ], 500);
        }
    }

    /**
     * Admin methods for managing testimonials
     */
    public function adminIndex(): JsonResponse
    {
        $testimonials = Testimonial::latest()->paginate(20);
        
        return response()->json([
            'success' => true,
            'data' => $testimonials
        ]);
    }

    public function approve(Request $request, $id): JsonResponse
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->update(['is_approved' => true]);

            return response()->json([
                'success' => true,
                'message' => 'Testimonial approved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to approve testimonial'
            ], 500);
        }
    }

    public function destroy($id): JsonResponse
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->delete();

            return response()->json([
                'success' => true,
                'message' => 'Testimonial deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete testimonial'
            ], 500);
        }
    }
}