@extends('layouts.app')

@section('content')

<section id="home" class="bg-gradient-to-r from-pink-100 to-pink-50">
    <div class="container mx-auto px-6 py-20">

        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>

                <h1 class="text-5xl font-bold text-pink-600 leading-tight">
                    Discover Your
                    <span class="text-pink-500">
                        Natural Beauty
                    </span>
                </h1>

                <p class="mt-6 text-gray-600 text-lg">
                    Explore premium skincare and makeup products specially selected
                    to help you look fresh, healthy, and beautiful every day.
                </p>

                <a href="#products"
                    class="inline-block mt-8 bg-pink-500 hover:bg-pink-600 text-white px-8 py-3 rounded-full transition">

                    Shop Now

                </a>

            </div>

           <div class="hidden md:flex justify-center relative">

    <div class="hidden md:flex justify-center items-center">

    <img
        src="{{ asset('images/products/banner.jpg') }}"
        alt="TrueBeauty Banner"
        class="w-[400px] h-[400px] object-contain">

</div>
        </div>

    </div>
</section>

<!-- CATEGORY -->
<section id="categories" class="py-20 bg-white">

    <div class="container mx-auto px-6">

        <h2 class="text-4xl font-bold text-center text-pink-600 mb-12">

            Shop By Category

        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">

            @foreach($categories as $category)

            <div class="bg-pink-50 rounded-2xl shadow hover:shadow-xl transition p-8 text-center">



                <h3 class="font-bold text-pink-600 text-lg">

                    {{ $category->name }}

                </h3>

            </div>

            @endforeach

        </div>

    </div>

</section>

<section id="products" class="py-20 bg-pink-50">

    <div class="container mx-auto px-6">

        <h2 class="text-4xl font-bold text-center text-pink-600 mb-12">

            Our Products

        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach($products as $product)

            <div class="bg-white rounded-2xl shadow hover:shadow-xl overflow-hidden transition duration-300">

                <img
                    src="{{ asset($product->image) }}"
                    alt="{{ $product->name }}"
                    class="w-full h-60 object-cover">

                <div class="p-5">

                    <span class="text-pink-500 text-sm font-semibold">

                        {{ $product->brand }}

                    </span>

                    <h3 class="text-lg font-bold mt-2">

                        {{ $product->name }}

                    </h3>

                    <p class="text-gray-500 text-sm mt-3 h-12">

                        {{ \Illuminate\Support\Str::limit($product->description, 60) }}

                    </p>

                    <div class="mt-5 flex justify-between items-center">

                        <span class="text-pink-600 text-lg font-bold">

                            Rp {{ number_format($product->price,0,',','.') }}

                        </span>

                        <button
                            class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg transition">

                            Buy

                        </button>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>


<section id="testimonials" class="py-20 bg-white">

    <div class="container mx-auto px-6">

        <h2 class="text-4xl font-bold text-center text-pink-600 mb-12">

            What Our Customers Say

        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            @foreach($testimonials as $testimonial)

            <div class="bg-pink-50 rounded-2xl shadow p-8">

               

                <p class="italic text-gray-600">

                    "{{ $testimonial->message }}"

                </p>

                <h4 class="mt-5 font-bold text-pink-600">

                    {{ $testimonial->name }}

                </h4>

            </div>

            @endforeach

        </div>

    </div>

</section>

@endsection