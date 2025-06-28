<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SubscriptionController extends Controller
{
    /**
     * Display subscription form
     */
    public function index()
    {
        $plans = Subscription::PLANS;
        $mealTypes = Subscription::MEAL_TYPES;
        $deliveryDays = Subscription::DELIVERY_DAYS;
        
        return view('subscription.index', compact('plans', 'mealTypes', 'deliveryDays'));
    }

    /**
     * Store subscription data
     */
    public function store(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|min:2|max:255',
            'phone' => [
                'required',
                'string',
                'regex:/^[0-9]{10,13}$/',
                'unique:subscriptions,phone'
            ],
            'email' => 'nullable|email|max:255',
            'address' => 'required|string|min:10|max:1000',
            'plan' => 'required|in:' . implode(',', array_keys(Subscription::PLANS)),
            'meal_types' => 'required|array|min:1',
            'meal_types.*' => 'in:' . implode(',', array_keys(Subscription::MEAL_TYPES)),
            'delivery_days' => 'required|array|min:1',
            'delivery_days.*' => 'in:' . implode(',', array_keys(Subscription::DELIVERY_DAYS)),
            'allergies' => 'nullable|string|max:1000',
            'delivery_time' => 'nullable|string|max:50',
            'start_date' => 'nullable|date|after_or_equal:today'
        ], [
            'full_name.required' => 'Nama lengkap wajib diisi',
            'full_name.min' => 'Nama lengkap minimal 2 karakter',
            'phone.required' => 'Nomor telepon wajib diisi',
            'phone.regex' => 'Nomor telepon harus 10-13 digit angka',
            'phone.unique' => 'Nomor telepon sudah terdaftar',
            'address.required' => 'Alamat pengiriman wajib diisi',
            'address.min' => 'Alamat pengiriman minimal 10 karakter',
            'plan.required' => 'Pilih paket berlangganan',
            'plan.in' => 'Paket yang dipilih tidak valid',
            'meal_types.required' => 'Pilih minimal satu jenis makanan',
            'meal_types.min' => 'Pilih minimal satu jenis makanan',
            'delivery_days.required' => 'Pilih minimal satu hari pengiriman',
            'delivery_days.min' => 'Pilih minimal satu hari pengiriman',
            'start_date.after_or_equal' => 'Tanggal mulai tidak boleh kurang dari hari ini'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak valid',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Additional validation for meal types and delivery days
            if (!Subscription::validateMealTypes($request->meal_types)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Jenis makanan yang dipilih tidak valid'
                ], 422);
            }

            if (!Subscription::validateDeliveryDays($request->delivery_days)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Hari pengiriman yang dipilih tidak valid'
                ], 422);
            }

            // Calculate total price
            $totalPrice = Subscription::calculateTotalPrice(
                $request->plan,
                $request->meal_types,
                $request->delivery_days
            );

            // Start database transaction
            DB::beginTransaction();

            // Create subscription
            $subscription = Subscription::create([
                'full_name' => $request->full_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'plan' => $request->plan,
                'meal_types' => $request->meal_types,
                'delivery_days' => $request->delivery_days,
                'allergies' => $request->allergies,
                'delivery_time' => $request->delivery_time,
                'total_price' => $totalPrice,
                'start_date' => $request->start_date ?: now()->toDateString(),
                'status' => 'active'
            ]);

            // Commit transaction
            DB::commit();

            // Log successful subscription
            Log::info('New subscription created', [
                'subscription_id' => $subscription->id,
                'customer' => $subscription->full_name,
                'plan' => $subscription->plan,
                'total_price' => $totalPrice
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Berlangganan berhasil! Tim kami akan menghubungi Anda segera untuk konfirmasi.',
                'data' => [
                    'subscription_id' => $subscription->id,
                    'customer_name' => $subscription->full_name,
                    'plan_name' => $subscription->plan_name,
                    'total_price' => number_format($totalPrice, 0, ',', '.'),
                    'formatted_total_price' => 'Rp ' . number_format($totalPrice, 0, ',', '.'),
                    'meal_types_count' => count($request->meal_types),
                    'delivery_days_count' => count($request->delivery_days)
                ]
            ], 201);

        } catch (\InvalidArgumentException $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 422);
            
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Subscription creation failed', [
                'error' => $e->getMessage(),
                'request_data' => $request->all()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem. Silakan coba lagi.'
            ], 500);
        }
    }

    /**
     * Show subscription details
     */
    public function show($id)
    {
        try {
            $subscription = Subscription::findOrFail($id);
            
            return response()->json([
                'success' => true,
                'data' => $subscription->summary
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Subscription tidak ditemukan'
            ], 404);
        }
    }

    /**
     * Get subscription list (admin)
     */
    public function list(Request $request)
    {
        try {
            $query = Subscription::query();

            // Filter by status
            if ($request->has('status') && $request->status !== '') {
                $query->where('status', $request->status);
            }

            // Filter by plan
            if ($request->has('plan') && $request->plan !== '') {
                $query->where('plan', $request->plan);
            }

            // Search by name or phone
            if ($request->has('search') && $request->search !== '') {
                $search = $request->search;
                $query->where(function($q) use ($search) {
                    $q->where('full_name', 'like', "%{$search}%")
                      ->orWhere('phone', 'like', "%{$search}%");
                });
            }

            // Order by latest
            $subscriptions = $query->orderBy('created_at', 'desc')
                                 ->paginate(15);

            return response()->json([
                'success' => true,
                'data' => $subscriptions,
                'meta' => [
                    'total' => $subscriptions->total(),
                    'per_page' => $subscriptions->perPage(),
                    'current_page' => $subscriptions->currentPage(),
                    'last_page' => $subscriptions->lastPage()
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to fetch subscriptions list', [
                'error' => $e->getMessage()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data subscription'
            ], 500);
        }
    }

    /**
     * Update subscription status
     */
    public function updateStatus(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|in:active,paused,cancelled'
        ], [
            'status.required' => 'Status wajib diisi',
            'status.in' => 'Status tidak valid'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak valid',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $subscription = Subscription::findOrFail($id);
            
            DB::beginTransaction();

            // Update status using model methods
            switch ($request->status) {
                case 'cancelled':
                    $subscription->cancel();
                    break;
                case 'paused':
                    $subscription->pause();
                    break;
                case 'active':
                    $subscription->resume();
                    break;
            }

            DB::commit();

            Log::info('Subscription status updated', [
                'subscription_id' => $id,
                'old_status' => $subscription->getOriginal('status'),
                'new_status' => $request->status
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Status berlangganan berhasil diupdate',
                'data' => [
                    'subscription_id' => $subscription->id,
                    'new_status' => $subscription->status
                ]
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Failed to update subscription status', [
                'subscription_id' => $id,
                'error' => $e->getMessage()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengupdate status subscription'
            ], 500);
        }
    }

    /**
     * Get subscription statistics (admin)
     */
    public function statistics()
    {
        try {
            $stats = [
                'total_subscriptions' => Subscription::count(),
                'active_subscriptions' => Subscription::where('status', 'active')->count(),
                'paused_subscriptions' => Subscription::where('status', 'paused')->count(),
                'cancelled_subscriptions' => Subscription::where('status', 'cancelled')->count(),
                'total_revenue' => Subscription::where('status', 'active')->sum('total_price'),
                'plans_distribution' => Subscription::select('plan', DB::raw('count(*) as count'))
                                                  ->groupBy('plan')
                                                  ->get()
                                                  ->mapWithKeys(function($item) {
                                                      return [Subscription::PLANS[$item->plan]['name'] => $item->count];
                                                  })
            ];

            return response()->json([
                'success' => true,
                'data' => $stats
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to fetch subscription statistics', [
                'error' => $e->getMessage()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil statistik subscription'
            ], 500);
        }
    }

    /**
     * Calculate price preview (for form)
     */
    public function calculatePrice(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'plan' => 'required|in:' . implode(',', array_keys(Subscription::PLANS)),
            'meal_types' => 'required|array|min:1',
            'delivery_days' => 'required|array|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $totalPrice = Subscription::calculateTotalPrice(
                $request->plan,
                $request->meal_types,
                $request->delivery_days
            );

            return response()->json([
                'success' => true,
                'data' => [
                    'plan_price' => Subscription::PLANS[$request->plan]['price'],
                    'meal_types_count' => count($request->meal_types),
                    'delivery_days_count' => count($request->delivery_days),
                    'weeks_per_month' => 4.3,
                    'total_price' => $totalPrice,
                    'formatted_total_price' => 'Rp ' . number_format($totalPrice, 0, ',', '.')
                ]
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghitung harga'
            ], 422);
        }
    }
}