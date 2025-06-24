<?php
// database/seeders/MealPlanSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MealPlan;

class MealPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mealPlans = [
            [
                'name' => 'Diet Plan',
                'slug' => 'diet',
                'description' => 'Paket makanan sehat untuk program diet',
                'price' => 30000,
                'features' => ['Rendah kalori', 'Sayuran segar', 'Protein lean'],
                'icon' => '🥗',
                'color_scheme' => 'green',
                'is_active' => true
            ],
            [
                'name' => 'Protein Plan',
                'slug' => 'protein',
                'description' => 'Paket makanan tinggi protein untuk fitness',
                'price' => 40000,
                'features' => ['High protein', 'Daging berkualitas', 'Fitness friendly'],
                'icon' => '🍖',
                'color_scheme' => 'blue',
                'is_active' => true
            ],
            [
                'name' => 'Royal Plan',
                'slug' => 'royal',
                'description' => 'Paket makanan premium dengan bahan terbaik',
                'price' => 60000,
                'features' => ['Premium ingredients', 'Gourmet style', 'Luxury experience'],
                'icon' => '👑',
                'color_scheme' => 'purple',
                'is_active' => true
            ]
        ];

        foreach ($mealPlans as $plan) {
            MealPlan::create($plan);
        }
    }
}