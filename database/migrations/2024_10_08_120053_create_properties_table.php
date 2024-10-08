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
        Schema::create('properties', function (Blueprint $table) {
            $table->id('property_id');
            $table->unsignedBigInteger('owner_id')->nullable(); // Use unsignedBigInteger
            $table->unsignedBigInteger('broker_id')->nullable(); // Use unsignedBigInteger
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('property_type')->nullable();
            $table->string('location')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('status')->nullable();
            $table->decimal('area', 8, 2)->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->string('amenities')->nullable();
            $table->timestamps();
        
            // Add foreign key constraints after defining the columns
            $table->foreign('owner_id')->references('user_id')->on('users')->onDelete('set null');
            $table->foreign('broker_id')->references('user_id')->on('users')->onDelete('set null');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
