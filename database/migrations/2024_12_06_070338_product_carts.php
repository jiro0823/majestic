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
        Schema::create('product_carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('is_paid')->default(false);
            $table->decimal('total', 10, 2)->nullable();
            $table->timestamps();
        });
    
        // Migration for product_cart_product pivot table
        Schema::create('product_cart_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_cart_id')->constrained('product_carts')->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->integer('quantity')->default(1);
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_cart_product');
        Schema::dropIfExists('product_carts');
    }
};
