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
        Schema::create('reviews_feedback', function (Blueprint $table) {
            $table->id('review_id');
            $table->foreignId('user_id')->nullable()->constrained('users', 'user_id');
            $table->foreignId('property_id')->nullable()->constrained('properties', 'property_id');
            $table->integer('rating')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews_feedback');
    }
};
