<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookingVisit;

class BookingsVisitsTableSeeder extends Seeder
{
    public function run()
    {
        BookingVisit::create([
            'user_id' => 1,
            'property_id' => 1,
            'visit_date' => now()->addDays(2),
            'status' => 'scheduled',
        ]);
    }
}
