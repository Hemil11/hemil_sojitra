<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReviewFeedback;

class ReviewsFeedbackTableSeeder extends Seeder
{
    public function run()
    {
        ReviewFeedback::create([
            'user_id' => 1,
            'property_id' => 1,
            'rating' => 5,
            'comments' => 'Excellent property!',
        ]);
    }
}
