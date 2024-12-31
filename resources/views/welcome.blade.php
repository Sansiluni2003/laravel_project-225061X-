<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MediCare - Doctor Appointment System</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .hero-section {
                background-color: #20B2AA;
                min-height: 60vh;
                background-image: linear-gradient(rgba(32, 178, 170, 0.9), rgba(32, 178, 170, 0.9));
                background-size: cover;
                background-position: center;
            }
        </style>
    </head>
    <body class="antialiased">
        <!-- Navigation -->
        <nav class="bg-teal-500 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="text-white text-2xl font-bold">MediCare</a>
                <div class="space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-white hover:text-teal-200">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-white hover:text-teal-200">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-white hover:text-teal-200">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="hero-section flex items-center justify-center text-center text-white">
            <div class="container mx-auto px-4">
                <h1 class="text-5xl font-bold mb-6">Your Health, Our Priority</h1>
                <p class="text-xl mb-8">Book appointments with top doctors easily and manage your healthcare journey.</p>
                <div class="space-x-4">
                    <a href="{{ route('register') }}" class="bg-white text-teal-600 px-6 py-3 rounded-lg font-semibold hover:bg-teal-100">Get Started</a>
                    <a href="{{ route('login') }}" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-teal-600">Login</a>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Expert Doctors -->
                <div class="text-center p-6">
                    <div class="text-3xl mb-4">👨‍⚕️</div>
                    <h3 class="text-2xl font-semibold mb-4">Expert Doctors</h3>
                    <p class="text-gray-600">Access to qualified and experienced healthcare professionals.</p>
                </div>

                <!-- Easy Booking -->
                <div class="text-center p-6">
                    <div class="text-3xl mb-4">📅</div>
                    <h3 class="text-2xl font-semibold mb-4">Easy Booking</h3>
                    <p class="text-gray-600">Schedule appointments quickly and efficiently.</p>
                </div>

                <!-- 24/7 Support -->
                <div class="text-center p-6">
                    <div class="text-3xl mb-4">🏥</div>
                    <h3 class="text-2xl font-semibold mb-4">24/7 Support</h3>
                    <p class="text-gray-600">Round-the-clock assistance for your healthcare needs.</p>
                </div>
            </div>
        </div>
    </body>
</html>
