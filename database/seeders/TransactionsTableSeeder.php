<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionsTableSeeder extends Seeder
{
    public function run()
    {
        Transaction::create([
            'buyer_id' => 1,
            'seller_id' => 2,
            'broker_id' => 2,
            'property_id' => 1,
            'amount' => 240000.00,
            'transaction_date' => now(),
            'status' => 'completed',
        ]);
    }
}
