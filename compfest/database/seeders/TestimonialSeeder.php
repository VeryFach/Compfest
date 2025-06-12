<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        $testimonials = [
            [
                'customer_name' => 'Sarah Wijaya',
                'customer_location' => 'Jakarta',
                'rating' => 5,
                'review_message' => 'SEA Catering has completely transformed my eating habits! The meals are delicious, nutritious, and perfectly portioned. I love how I can customize everything according to my dietary preferences.',
                'is_approved' => true
            ],
            [
                'customer_name' => 'Budi Santoso',
                'customer_location' => 'Surabaya',
                'rating' => 5,
                'review_message' => 'As a busy professional, SEA Catering is a lifesaver! The delivery is always on time, and the food quality is consistently excellent. I have recommended it to all my colleagues.',
                'is_approved' => true
            ],
            [
                'customer_name' => 'Maya Sari',
                'customer_location' => 'Bandung',
                'rating' => 4,
                'review_message' => 'The variety of meal options is amazing! I never get bored with my subscription. The nutritional information helps me track my health goals perfectly.',
                'is_approved' => true
            ],
            [
                'customer_name' => 'Ahmad Rahman',
                'customer_location' => 'Medan',
                'rating' => 5,
                'review_message' => 'Excellent service and amazing food quality! The packaging is eco-friendly and the meals arrive fresh every time. SEA Catering exceeded my expectations.',
                'is_approved' => true
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}