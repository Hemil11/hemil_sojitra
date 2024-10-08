<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FavoritesWishlist;

class FavoritesWishlistTableSeeder extends Seeder
{
    public function run()
    {
        FavoritesWishlist::create([
            'user_id' => 1,
            'property_id' => 1,
        ]);
    }
}
