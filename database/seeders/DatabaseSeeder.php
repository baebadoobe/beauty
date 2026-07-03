<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory(5)->create();

        Product::factory(10)->create();

        Testimonial::factory(5)->create();
    }
}