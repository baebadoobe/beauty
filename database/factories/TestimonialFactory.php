<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    public function definition(): array
    {
        return [

            'name' => fake()->name(),

            'photo' => 'user'.fake()->numberBetween(1,6).'.jpg',

            'message' => fake()->sentence(12),

        ];
    }
}