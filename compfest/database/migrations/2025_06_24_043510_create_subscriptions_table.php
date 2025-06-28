<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone', 15);
            $table->string('email')->nullable();
            $table->text('address');
            $table->enum('plan', ['diet', 'protein', 'royal']);
            $table->json('meal_types'); // breakfast, lunch, dinner
            $table->json('delivery_days'); // monday, tuesday, ..., sunday
            $table->text('allergies')->nullable();
            $table->string('delivery_time')->nullable();
            $table->decimal('total_price', 12, 2);
            $table->enum('status', ['active', 'paused', 'cancelled'])->default('active');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};