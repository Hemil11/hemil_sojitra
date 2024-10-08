<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PropertyCategory;

class PropertyCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        PropertyCategory::create([
            'name' => 'Residential',
            'description' => 'Residential properties including apartments, houses, and villas.',
        ]);

        PropertyCategory::create([
            'name' => 'Commercial',
            'description' => 'Commercial properties including offices, shops, and warehouses.',
        ]);
    }
}
