<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;
use Faker\Factory as Faker;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Sample subscription data
        $subscriptions = [
            [
                'full_name' => 'Budi Santoso',
                'phone' => '08123456789',
                'email' => 'budi.santoso@example.com',
                'address' => 'Jl. Merdeka No. 123, Jakarta Pusat, DKI Jakarta 10110',
                'plan' => 'protein',
                'meal_types' => ['breakfast', 'lunch'],
                'delivery_days' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'],
                'allergies' => 'Alergi kacang tanah',
                'delivery_time' => '07:00-09:00',
                'total_price' => Subscription::calculateTotalPrice('protein', ['breakfast', 'lunch'], ['monday', 'tuesday', 'wednesday', 'thursday', 'friday']),
                'status' => 'active',
                'start_date' => now()->subDays(30),
            ],
            [
                'full_name' => 'Ani Wijaya',
                'phone' => '08234567890',
                'email' => 'ani.wijaya@example.com',
                'address' => 'Jl. Sudirman No. 45, Jakarta Selatan, DKI Jakarta 12190',
                'plan' => 'diet',
                'meal_types' => ['breakfast', 'dinner'],
                'delivery_days' => ['monday', 'wednesday', 'friday'],
                'allergies' => 'Tidak ada',
                'delivery_time' => '17:00-19:00',
                'total_price' => Subscription::calculateTotalPrice('diet', ['breakfast', 'dinner'], ['monday', 'wednesday', 'friday']),
                'status' => 'active',
                'start_date' => now()->subDays(15),
            ],
            [
                'full_name' => 'Rudi Hermawan',
                'phone' => '08345678901',
                'email' => 'rudi.hermawan@example.com',
                'address' => 'Jl. Thamrin No. 8, Jakarta Pusat, DKI Jakarta 10350',
                'plan' => 'royal',
                'meal_types' => ['breakfast', 'lunch', 'dinner'],
                'delivery_days' => ['tuesday', 'thursday', 'saturday'],
                'allergies' => 'Alergi seafood',
                'delivery_time' => '11:00-13:00',
                'total_price' => Subscription::calculateTotalPrice('royal', ['breakfast', 'lunch', 'dinner'], ['tuesday', 'thursday', 'saturday']),
                'status' => 'paused',
                'start_date' => now()->subDays(60),
                'end_date' => now()->addDays(30),
            ],
            [
                'full_name' => 'Siti Rahayu',
                'phone' => '08456789012',
                'email' => 'siti.rahayu@example.com',
                'address' => 'Jl. Gatot Subroto No. 23, Jakarta Selatan, DKI Jakarta 12930',
                'plan' => 'protein',
                'meal_types' => ['lunch'],
                'delivery_days' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'],
                'allergies' => 'Alergi susu sapi',
                'delivery_time' => '12:00-14:00',
                'total_price' => Subscription::calculateTotalPrice('protein', ['lunch'], ['monday', 'tuesday', 'wednesday', 'thursday', 'friday']),
                'status' => 'cancelled',
                'start_date' => now()->subDays(90),
                'end_date' => now()->subDays(30),
            ],
            [
                'full_name' => 'Dewi Kurnia',
                'phone' => '08567890123',
                'email' => 'dewi.kurnia@example.com',
                'address' => 'Jl. Kebon Sirih No. 12, Jakarta Pusat, DKI Jakarta 10340',
                'plan' => 'diet',
                'meal_types' => ['breakfast'],
                'delivery_days' => ['sunday'],
                'allergies' => 'Vegetarian',
                'delivery_time' => '08:00-10:00',
                'total_price' => Subscription::calculateTotalPrice('diet', ['breakfast'], ['sunday']),
                'status' => 'active',
                'start_date' => now()->subDays(7),
            ],
        ];

        // Insert subscriptions
        foreach ($subscriptions as $subscription) {
            Subscription::create($subscription);
        }

        // Generate random subscriptions
        for ($i = 0; $i < 15; $i++) {
            $plan = $faker->randomElement(['diet', 'protein', 'royal']);
            $mealTypes = $faker->randomElements(
                array_keys(Subscription::MEAL_TYPES), 
                $faker->numberBetween(1, 3)
            );
            $deliveryDays = $faker->randomElements(
                array_keys(Subscription::DELIVERY_DAYS), 
                $faker->numberBetween(1, 7)
            );
            
            Subscription::create([
                'full_name' => $faker->name,
                'phone' => '08' . $faker->numerify('########'),
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->address,
                'plan' => $plan,
                'meal_types' => $mealTypes,
                'delivery_days' => $deliveryDays,
                'allergies' => $faker->randomElement(['Tidak ada', 'Alergi kacang', 'Alergi seafood', 'Alergi susu', 'Vegetarian']),
                'delivery_time' => $faker->randomElement(['07:00-09:00', '11:00-13:00', '17:00-19:00']),
                'total_price' => Subscription::calculateTotalPrice($plan, $mealTypes, $deliveryDays),
                'status' => $faker->randomElement(['active', 'paused', 'cancelled']),
                'start_date' => $faker->dateTimeBetween('-3 months', 'now'),
                'end_date' => $faker->optional(0.3)->dateTimeBetween('now', '+3 months'),
            ]);
        }
    }
}