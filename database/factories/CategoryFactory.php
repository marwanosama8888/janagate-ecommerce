<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class CategoryFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->jobTitle();
        $slug = Str::slug($title);
        return [
            'name' => $title,
            'slug' => $slug,
        ];
    }
}
