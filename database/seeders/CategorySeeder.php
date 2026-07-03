<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Skincare'
        ]);

        Category::create([
            'name' => 'Makeup'
        ]);

        Category::create([
            'name' => 'Body Care'
        ]);
    }
}