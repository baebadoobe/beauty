<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $products = [

            [
                "name" => "Hydrating Serum",
                "brand" => "Somethinc",
                "image" => "images/products/hydrating-serum.jpg",
            ],

            [
                "name" => "Vitamin C Serum",
                "brand" => "Skintific",
                "image" => "images/products/vitamin-c-serum.jpg",
            ],

            [
                "name" => "Gentle Cleanser",
                "brand" => "Wardah",
                "image" => "images/products/gentle-cleanser.jpg",
            ],

            [
                "name" => "Moisturizer",
                "brand" => "The Originote",
                "image" => "images/products/moisturizer.jpg",
            ],

            [
                "name" => "Sunscreen SPF50",
                "brand" => "Azarine",
                "image" => "images/products/sunscreen.jpg",
            ],

            [
                "name" => "Lip Tint",
                "brand" => "Emina",
                "image" => "images/products/lip-tint.jpg",
            ],

            [
                "name" => "Cushion Foundation",
                "brand" => "Make Over",
                "image" => "images/products/cushion-foundation.jpg",
            ],

            [
                "name" => "Body Lotion",
                "brand" => "Vaseline",
                "image" => "images/products/body-lotion.jpg",
            ],

            [
                "name" => "Night Cream",
                "brand" => "Glad2Glow",
                "image" => "images/products/night-cream.jpg",
            ],

            [
                "name" => "Eye Cream",
                "brand" => "Avoskin",
                "image" => "images/products/eye-cream.jpg",
            ],

        ];

        $product = fake()->randomElement($products);

        return [

            'category_id' => Category::inRandomOrder()->first()->id,

            'name' => $product['name'],

            'brand' => $product['brand'],

            'price' => fake()->numberBetween(50000, 250000),

            'image' => $product['image'],

            'description' => fake()->sentence(12),

        ];
    }
}