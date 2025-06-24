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
        'plan',
        'meal_types',
        'delivery_days',
        'allergies',
        'total_price',
        'status',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'meal_types' => 'array',
        'delivery_days' => 'array',
        'total_price' => 'decimal:2',
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

    // Relationship dengan MealPlan
    public function mealPlan()
    {
        return $this->belongsTo(MealPlan::class, 'plan', 'slug');
    }

    // Accessor untuk mendapatkan nama plan
    public function getPlanNameAttribute()
    {
        return match($this->plan) {
            'diet' => 'Diet Plan',
            'protein' => 'Protein Plan',
            'royal' => 'Royal Plan',
            default => 'Unknown Plan'
        };
    }

    // Accessor untuk mendapatkan harga plan
    public function getPlanPriceAttribute()
    {
        return match($this->plan) {
            'diet' => 30000,
            'protein' => 40000,
            'royal' => 60000,
            default => 0
        };
    }

    // Method untuk menghitung total harga
    public static function calculateTotalPrice($plan, $mealTypes, $deliveryDays)
    {
        $planPrices = [
            'diet' => 30000,
            'protein' => 40000,
            'royal' => 60000
        ];

        $planPrice = $planPrices[$plan] ?? 0;
        $mealTypesCount = is_array($mealTypes) ? count($mealTypes) : 0;
        $deliveryDaysCount = is_array($deliveryDays) ? count($deliveryDays) : 0;

        return $planPrice * $mealTypesCount * $deliveryDaysCount * 4.3;
    }

    // Scope untuk subscription aktif
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}