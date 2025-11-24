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
    
    @vite(['resources/css/app.css', 'resources/js/scripts.js'])
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


    <main>
        @yield('content')
    </main>

</body>
</html>

