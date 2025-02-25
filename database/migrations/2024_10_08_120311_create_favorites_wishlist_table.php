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
        Schema::create('favorites_wishlist', function (Blueprint $table) {
            $table->id('favorite_id');
            $table->foreignId('user_id')->nullable()->constrained('users', 'user_id');
            $table->foreignId('property_id')->nullable()->constrained('properties', 'property_id');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites_wishlist');
    }
};
