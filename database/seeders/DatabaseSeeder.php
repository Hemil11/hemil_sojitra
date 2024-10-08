<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            PropertiesTableSeeder::class,
            TransactionsTableSeeder::class,
            PropertyImagesTableSeeder::class,
            BookingsVisitsTableSeeder::class,
            ReviewsFeedbackTableSeeder::class,
            PropertyCategoriesTableSeeder::class,
            FavoritesWishlistTableSeeder::class,
        ]);
    }
}
