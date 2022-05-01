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

        for ($i = 0; $i < 10;) {
            $faker = Faker::create();
            $name = 'TShirt '.  $faker->firstName();
            $data = Product::create([
                'vendor_id' => 1,
                'name' => $name,
                'description' => 'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.',
                'active' => 1,
                'price' => 100,
                'info' => 'info',
                'material' => 'material',
                'weight' => 100,
                'widthHeight' => 100,
                'slug' => Str::slug( $name ),

            ]);

            $imageUrl =  url('https://5.imimg.com/data5/BG/UM/MY-23375112/61-500x500.jpg');
            $data->addMediaFromUrl($imageUrl)->toMediaCollection();
            $pivot = SCategory::find(1);
            $data->subcategories()->save($pivot);
            $i++;
        }
    }
}
