<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\MealPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    /**
     * Display subscription form
     */
    public function index()
    {
        $mealPlans = MealPlan::active()->get();
        return view('subscription.index', compact('mealPlans'));
    }

    /**
     * Store subscription data
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'nullable|email',
            'address' => 'required|string',
            'plan' => 'required|in:diet,protein,royal',
            'meal_types' => 'required|array|min:1',
            'delivery_days' => 'required|array|min:1',
            'allergies' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Hitung total harga
        $totalPrice = Subscription::calculateTotalPrice(
            $request->plan,
            $request->meal_types,
            $request->delivery_days
        );

        // Simpan subscription
        $subscription = Subscription::create([
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'plan' => $request->plan,
            'meal_types' => $request->meal_types,
            'delivery_days' => $request->delivery_days,
            'allergies' => $request->allergies,
            'total_price' => $totalPrice,
            'start_date' => now(),
            'status' => 'active'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Berlangganan berhasil! Tim kami akan menghubungi Anda segera.',
            'subscription_id' => $subscription->id,
            'total_price' => number_format($totalPrice, 0, ',', '.')
        ], 201);
    }

    /**
     * Show subscription details
     */
    public function show($id)
    {
        $subscription = Subscription::with('mealPlan')->findOrFail($id);
        return view('subscription.show', compact('subscription'));
    }

    /**
     * Get subscription list (admin)
     */
    public function list()
    {
        $subscriptions = Subscription::with('mealPlan')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
            
        return view('admin.subscriptions', compact('subscriptions'));
    }

    /**
     * Update subscription status
     */
    public function updateStatus(Request $request, $id)
    {
        $subscription = Subscription::findOrFail($id);
        
        $validator = Validator::make($request->all(), [
            'status' => 'required|in:active,paused,cancelled'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $subscription->update([
            'status' => $request->status
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Status berlangganan berhasil diupdate'
        ]);
    }
}