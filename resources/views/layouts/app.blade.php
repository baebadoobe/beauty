<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrueBeauty</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-pink-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">

        <div class="container mx-auto px-6">

            <div class="flex justify-between items-center h-16">

                <!-- Logo -->
                <a href="#home" class="text-3xl font-bold text-pink-500">
                    TrueBeauty
                </a>

                <!-- Menu -->
                <ul class="hidden md:flex items-center gap-8 font-medium">

                    <li>
                        <a href="#home"
                            class="hover:text-pink-500 transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#categories"
                            class="hover:text-pink-500 transition">
                            Categories
                        </a>
                    </li>

                    <li>
                        <a href="#products"
                            class="hover:text-pink-500 transition">
                            Products
                        </a>
                    </li>

                    <li>
                        <a href="#testimonials"
                            class="hover:text-pink-500 transition">
                            Testimonials
                        </a>
                    </li>

                </ul>

                <!-- Button -->
                <a href="#products"
                    class="hidden md:block bg-pink-500 text-white px-5 py-2 rounded-full hover:bg-pink-600 transition">

                    Shop Now

                </a>

            </div>

        </div>

    </nav>

    <!-- Content -->
    <main>

        @yield('content')

    </main>

    <!-- Footer -->
    <footer class="bg-white mt-16 border-t">

        <div class="container mx-auto px-6 py-8 text-center">

            <h3 class="text-2xl font-bold text-pink-500">
                TrueBeauty
            </h3>

            <p class="text-gray-500 mt-2">
                Discover your beauty with premium skincare & makeup products.
            </p>

            <p class="text-sm text-gray-400 mt-6">
                © {{ date('Y') }} TrueBeauty. All Rights Reserved.
            </p>

        </div>

    </footer>

</body>

</html>