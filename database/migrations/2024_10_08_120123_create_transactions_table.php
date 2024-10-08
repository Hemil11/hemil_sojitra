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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->foreignId('buyer_id')->nullable()->constrained('users', 'user_id');
            $table->foreignId('seller_id')->nullable()->constrained('users', 'user_id');
            $table->foreignId('broker_id')->nullable()->constrained('users', 'user_id');
            $table->foreignId('property_id')->nullable()->constrained('properties', 'property_id');
            $table->decimal('amount', 10, 2)->nullable();
            $table->timestamp('transaction_date')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
