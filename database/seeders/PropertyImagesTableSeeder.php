<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PropertyImage;

class PropertyImagesTableSeeder extends Seeder
{
    public function run()
    {
        PropertyImage::create([
            'property_id' => 1,
            'image_url' => 'image1.jpg',
        ]);

        PropertyImage::create([
            'property_id' => 1,
            'image_url' => 'image2.jpg',
        ]);
    }
}
