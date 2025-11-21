<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Bike Bag - Wynajem walizek rowerowych EVOC' }}</title>
    <link rel="icon" type="image/webp" href="{{ asset('favicon.webp') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Rajdhani', sans-serif;
        }
        .lato {
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-black antialiased" style="font-family: 'Rajdhani', sans-serif;">
    <!-- Top Bar -->
    <div class="bg-black h-8 flex items-center justify-center">
        <div class="container mx-auto px-4 flex items-center justify-center gap-8 text-white text-sm">
            <p class="font-black">Skontaktuj się z nami!</p>
            <a href="mailto:biuro@bikebag.pl" class="font-normal hover:underline">biuro@bikebag.pl</a>
            <a href="tel:+48732730732" class="font-normal hover:underline">Telefon: 732-730-732</a>
        </div>
    </div>

    <!-- Header -->
    <header class="bg-white shadow-md h-[120px] sticky top-0 z-50 relative">
        <div class="container mx-auto px-4 h-full flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ Vite::asset('resources/images/shared/logo.webp') }}" alt="Bike Bag Logo" class="h-20 w-20 object-contain">
            </a>
            <nav class="hidden lg:flex items-center gap-8">
                @php
                    $currentRoute = Route::currentRouteName();
                @endphp
                <a href="{{ route('offer') }}" class="text-xl {{ $currentRoute == 'offer' ? 'font-bold' : 'font-normal' }} hover:font-bold transition-all">CO OFERUJEMY</a>
                <a href="{{ route('pricing') }}" class="text-xl {{ $currentRoute == 'pricing' ? 'font-bold' : 'font-normal' }} hover:font-bold transition-all">CENNIK</a>
                <a href="{{ route('contact') }}" class="text-xl {{ $currentRoute == 'contact' ? 'font-bold' : 'font-normal' }} hover:font-bold transition-all">KONTAKT</a>
                <a href="{{ route('faq') }}" class="text-xl {{ $currentRoute == 'faq' ? 'font-bold' : 'font-normal' }} hover:font-bold transition-all">FAQ</a>
                <a href="{{ route('terms') }}" class="text-xl {{ $currentRoute == 'terms' ? 'font-bold' : 'font-normal' }} hover:font-bold transition-all">REGULAMIN</a>
                <a href="#" class="w-8 h-8 flex items-center justify-center">
                    <i class="fab fa-facebook text-xl"></i>
                </a>
            </nav>
            <button class="lg:hidden w-8 h-8 flex flex-col justify-center gap-1.5" id="mobile-menu-toggle" aria-label="Toggle menu">
                <span class="w-full h-0.5 bg-black transition-all"></span>
                <span class="w-full h-0.5 bg-black transition-all"></span>
                <span class="w-full h-0.5 bg-black transition-all"></span>
            </button>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 bg-white z-50" style="top: 152px; left: 0; right: 0; bottom: 0;">
                <div class="w-full h-full overflow-y-auto">
                    <nav class="flex flex-col w-full">
                        @php
                            $currentRoute = Route::currentRouteName();
                        @endphp
                        <a href="{{ route('offer') }}" class="text-3xl font-normal py-4 border-b border-gray-300 hover:font-bold transition-all text-center w-full {{ $currentRoute == 'offer' ? 'font-bold' : '' }}">CO OFERUJEMY</a>
                        <a href="{{ route('pricing') }}" class="text-3xl font-normal py-4 border-b border-gray-300 hover:font-bold transition-all text-center w-full {{ $currentRoute == 'pricing' ? 'font-bold' : '' }}">CENNIK</a>
                        <a href="{{ route('contact') }}" class="text-3xl font-normal py-4 border-b border-gray-300 hover:font-bold transition-all text-center w-full {{ $currentRoute == 'contact' ? 'font-bold' : '' }}">KONTAKT</a>
                        <a href="{{ route('faq') }}" class="text-3xl font-normal py-4 border-b border-gray-300 hover:font-bold transition-all text-center w-full {{ $currentRoute == 'faq' ? 'font-bold' : '' }}">FAQ</a>
                        <a href="{{ route('terms') }}" class="text-3xl font-normal py-4 border-b border-gray-300 hover:font-bold transition-all text-center w-full {{ $currentRoute == 'terms' ? 'font-bold' : '' }}">REGULAMIN</a>
                        <div class="flex justify-center py-4 border-b border-gray-300">
                            <a href="#" class="w-8 h-8 flex items-center justify-center">
                                <i class="fab fa-facebook text-2xl"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-8">
                <div>
                    <img src="{{ Vite::asset('resources/images/shared/logo.webp') }}" alt="Bike Bag Logo" class="h-24 w-24 object-contain mb-6">
                    <div class="space-y-4 text-xl font-normal">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <p>ul. 28 Lipca 1943/3, Kraków 30-223</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <a href="tel:+48732730732" class="hover:underline">+48 732 730 732</a>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <a href="mailto:biuro@bikebag.pl" class="hover:underline">biuro@bikebag.pl</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">MAPA STRONY:</h3>
                    <ul class="space-y-2 text-xl font-normal">
                        @php
                            $currentRoute = Route::currentRouteName();
                        @endphp
                        <li><a href="{{ route('offer') }}" class="hover:underline {{ $currentRoute == 'offer' ? 'underline' : '' }}">Co oferujemy</a></li>
                        <li><a href="{{ route('pricing') }}" class="hover:underline {{ $currentRoute == 'pricing' ? 'underline' : '' }}">Cennik</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:underline {{ $currentRoute == 'contact' ? 'underline' : '' }}">Kontakt</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:underline {{ $currentRoute == 'faq' ? 'underline' : '' }}">FAQ</a></li>
                        <li><a href="{{ route('terms') }}" class="hover:underline {{ $currentRoute == 'terms' ? 'underline' : '' }}">Regulamin</a></li>
                        <li><a href="#" class="hover:underline">Polityka prywatności</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-[#2a2a2a] py-2">
            <div class="container mx-auto px-4">
                <p class="text-sm font-medium text-[#ebebeb] text-center">Copyright by Emsit 2025</p>
            </div>
        </div>
    </footer>
</body>
</html>

