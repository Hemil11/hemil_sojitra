<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertiesTableSeeder extends Seeder
{
    public function run()
    {
        Property::create([
            'owner_id' => 1,
            'broker_id' => 2,
            'title' => 'Luxury Apartment',
            'description' => 'A beautiful luxury apartment in the city center.',
            'property_type' => 'Apartment',
            'location' => 'City Center',
            'price' => 250000.00,
            'status' => 'available',
            'area' => 1200.00,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'amenities' => 'Pool, Gym, Parking',
        ]);
    }
}
