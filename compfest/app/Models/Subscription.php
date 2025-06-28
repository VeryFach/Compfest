<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'address',
        'plan',
        'meal_types',
        'delivery_days',
        'allergies',
        'delivery_time',
        'total_price',
        'status',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'meal_types' => 'array',
        'delivery_days' => 'array',
        'total_price' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    // Plan configurations
    const PLANS = [
        'diet' => [
            'name' => 'Diet Plan',
            'price' => 30000,
            'description' => 'Rendah kalori, sayuran segar, protein lean'
        ],
        'protein' => [
            'name' => 'Protein Plan', 
            'price' => 40000,
            'description' => 'High protein, daging berkualitas, fitness friendly'
        ],
        'royal' => [
            'name' => 'Royal Plan',
            'price' => 60000,
            'description' => 'Premium ingredients, gourmet style, luxury experience'
        ]
    ];

    // Meal types configuration
    const MEAL_TYPES = [
        'breakfast' => 'Sarapan',
        'lunch' => 'Makan Siang',
        'dinner' => 'Makan Malam'
    ];

    // Delivery days configuration
    const DELIVERY_DAYS = [
        'monday' => 'Senin',
        'tuesday' => 'Selasa', 
        'wednesday' => 'Rabu',
        'thursday' => 'Kamis',
        'friday' => 'Jumat',
        'saturday' => 'Sabtu',
        'sunday' => 'Minggu'
    ];

    // Accessor untuk mendapatkan nama plan
    public function getPlanNameAttribute()
    {
        return self::PLANS[$this->plan]['name'] ?? 'Unknown Plan';
    }

    // Accessor untuk mendapatkan harga plan
    public function getPlanPriceAttribute()
    {
        return self::PLANS[$this->plan]['price'] ?? 0;
    }

    // Accessor untuk mendapatkan deskripsi plan
    public function getPlanDescriptionAttribute()
    {
        return self::PLANS[$this->plan]['description'] ?? '';
    }

    // Accessor untuk format meal types
    public function getFormattedMealTypesAttribute()
    {
        if (!is_array($this->meal_types)) {
            return [];
        }

        return array_map(function($type) {
            return self::MEAL_TYPES[$type] ?? $type;
        }, $this->meal_types);
    }

    // Accessor untuk format delivery days
    public function getFormattedDeliveryDaysAttribute()
    {
        if (!is_array($this->delivery_days)) {
            return [];
        }

        return array_map(function($day) {
            return self::DELIVERY_DAYS[$day] ?? $day;
        }, $this->delivery_days);
    }

    // Method untuk menghitung total harga
    public static function calculateTotalPrice($plan, $mealTypes, $deliveryDays)
    {
        // Validasi plan
        if (!isset(self::PLANS[$plan])) {
            throw new \InvalidArgumentException("Invalid plan: {$plan}");
        }

        $planPrice = self::PLANS[$plan]['price'];
        $mealTypesCount = is_array($mealTypes) ? count($mealTypes) : 0;
        $deliveryDaysCount = is_array($deliveryDays) ? count($deliveryDays) : 0;

        // Validasi minimal 1 meal type dan 1 delivery day
        if ($mealTypesCount === 0) {
            throw new \InvalidArgumentException("At least one meal type must be selected");
        }

        if ($deliveryDaysCount === 0) {
            throw new \InvalidArgumentException("At least one delivery day must be selected");
        }

        // Formula: Plan Price × Meal Types × Delivery Days × 4.3 (weeks per month)
        return $planPrice * $mealTypesCount * $deliveryDaysCount * 4.3;
    }

    // Method untuk validasi meal types
    public static function validateMealTypes($mealTypes)
    {
        if (!is_array($mealTypes) || count($mealTypes) === 0) {
            return false;
        }

        foreach ($mealTypes as $type) {
            if (!array_key_exists($type, self::MEAL_TYPES)) {
                return false;
            }
        }

        return true;
    }

    // Method untuk validasi delivery days
    public static function validateDeliveryDays($deliveryDays)
    {
        if (!is_array($deliveryDays) || count($deliveryDays) === 0) {
            return false;
        }

        foreach ($deliveryDays as $day) {
            if (!array_key_exists($day, self::DELIVERY_DAYS)) {
                return false;
            }
        }

        return true;
    }

    // Scope untuk subscription aktif
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // Scope untuk subscription berdasarkan plan
    public function scopeByPlan($query, $plan)
    {
        return $query->where('plan', $plan);
    }

    // Method untuk mendapatkan ringkasan subscription
    public function getSummaryAttribute()
    {
        return [
            'id' => $this->id,
            'customer_name' => $this->full_name,
            'plan' => $this->plan_name,
            'meal_types' => $this->formatted_meal_types,
            'delivery_days' => $this->formatted_delivery_days,
            'total_price' => $this->total_price,
            'status' => $this->status,
            'start_date' => $this->start_date?->format('d/m/Y'),
        ];
    }

    // Method untuk menghentikan subscription
    public function cancel()
    {
        $this->update([
            'status' => 'cancelled',
            'end_date' => now()->toDateString()
        ]);
    }

    // Method untuk menghentikan sementara subscription
    public function pause()
    {
        $this->update(['status' => 'paused']);
    }

    // Method untuk melanjutkan subscription
    public function resume()
    {
        $this->update(['status' => 'active']);
    }
}