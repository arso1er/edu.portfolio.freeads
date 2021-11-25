<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(930),
            'picture' => $this->faker->imageUrl(640, 480, 'animals', true),
            'price' => $this->faker->numberBetween(10, 10000),
            'location' => Str::random(10),
            'user_id' => rand(2, 4)
        ];
    }
}
