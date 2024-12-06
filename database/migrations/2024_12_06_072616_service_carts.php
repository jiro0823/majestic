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
        Schema::create('service_carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('is_paid')->default(false);
            $table->decimal('total', 10, 2)->nullable();
            $table->timestamps();
        });
    
        // Migration for service_cart_service pivot table
        Schema::create('service_cart_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_cart_id')->constrained('service_carts')->onDelete('cascade');
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->foreignId('time_slot_id')->nullable()->constrained('time_slots')->onDelete('set null');
            $table->foreignId('location_id')->nullable()->constrained('locations')->onDelete('set null');
            $table->date('date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_cart_service');
    Schema::dropIfExists('service_carts');
    }
};
