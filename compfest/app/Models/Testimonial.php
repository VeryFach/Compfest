<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_location',
        'rating',
        'review_message',
        'is_approved'
    ];

    protected $casts = [
        'rating' => 'integer',
        'is_approved' => 'boolean'
    ];

    // Scope untuk testimonials yang sudah disetujui
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }

    // Scope untuk rating tinggi
    public function scopeHighRating($query, $minRating = 4)
    {
        return $query->where('rating', '>=', $minRating);
    }
}