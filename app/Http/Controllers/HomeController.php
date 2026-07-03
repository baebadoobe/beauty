<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $products = Product::latest()->take(10)->get();

        $testimonials = Testimonial::all();

        return view('home', [
            'categories' => $categories,
            'products' => $products,
            'testimonials' => $testimonials,
        ]);
    }
}