<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\SCategory;
use Illuminate\Database\Seeder;
use Str;
use Faker\Factory as Faker;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20;) {
            $data = Product::create([
                'vendor_id' => 1,
                'name' => 'New Product',
                'description' => 'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.',
                'active' => 1,
                'price' => 100,
                'info' => 'info',
                'material' => 'material',
                'weight' => 100,
                'widthHeight' => 100,
                'slug' => Str::slug('New Product'),

            ]);
            $faker = Faker::create();

            $imageUrl = $faker->imageUrl(640, 480, null, false);
            $data->addMediaFromUrl($imageUrl)->toMediaCollection();
            $pivot = SCategory::find(1);
            $data->subcategories()->save($pivot);
            $i++;
        }
    }
}
