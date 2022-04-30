<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class ProductFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name() .' Dress';
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->text(200),
            'size' => ['S','M','XL'],
            'color' => ['red','white','black'],
            'price' => $this->faker->numberBetween($min = 100, $max = 500),
                ];
    }
}
