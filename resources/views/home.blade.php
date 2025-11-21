@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <img src="{{ Vite::asset('resources/images/home/bike-bag-hero.webp') }}" alt="EVOC Bike Bag Pro"
               class="w-full h-auto rounded-lg">
        </div>
        <div>
          <h1 class="text-6xl font-light leading-tight mb-6">
            <span class="block">Oferujemy wynajem</span>
            <span class="block">walizek rowerowych</span>
            <span class="block">
                            <span class="font-bold">EVOC</span> <span class="font-medium">BIKE BAG PRO</span>
                        </span>
          </h1>
          <a href="{{ route('contact') }}"
             class="inline-block border-2 border-black px-10 py-4 rounded-full text-xl font-medium uppercase hover:bg-black hover:text-white transition-all">
            wynajmij już teraz
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- EVOC Brand Section -->
  <section class="py-20 bg-gray-200">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
          <img src="{{ Vite::asset('resources/images/shared/evoc-logo.webp') }}" alt="EVOC Logo"
               class="w-full max-w-md">
        </div>
        <div>
          <p class="text-3xl font-normal leading-relaxed">
            Marka EVOC to jedno z najlepszych rozwiązań do bezpiecznego transportu roweru w samolocie, pociągu czy
            Samochodzie.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Info Banner -->
  <section class="bg-black py-6">
    <div class="container mx-auto px-4">
      <p class="text-xl font-medium text-white text-center">
        Nasze walizki przeznaczone są do przewozu rowerów szosowych, triathlonowych oraz MTB, zapewniając im pełną
        ochronę w każdej podróży.
      </p>
    </div>
  </section>

  <!-- Why Rent Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-6xl font-semibold text-center mb-16">
        <span class="block">Dlaczgo warto</span>
        <span class="block">wynająć u nas?</span>
      </h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">
        <div class="flex items-start gap-6">
          <div class="flex-shrink-0">
            <img src="{{ Vite::asset('resources/images/shared/icon-location.webp') }}" alt="Lokalizacja"
                 class="w-24 h-24 object-contain">
          </div>
          <div>
            <h3 class="text-2xl font-light mb-2 lato">Łatwy odbiór i zwrot w Krakowie</h3>
          </div>
        </div>
        <div class="flex items-start gap-6">
          <div class="flex-shrink-0">
            <img src="{{ Vite::asset('resources/images/shared/icon-bike.webp') }}" alt="Rower"
                 class="w-24 h-24 object-contain">
          </div>
          <div>
            <h3 class="text-2xl font-light mb-2 lato">Walizki dostosowane do większości ram</h3>
            <p class="text-xl font-light lato">(w tym enduro i downhill)</p>
          </div>
        </div>
        <div class="flex items-start gap-6">
          <div class="flex-shrink-0">
            <img src="{{ Vite::asset('resources/images/shared/icon-plane.webp') }}" alt="Samolot"
                 class="w-24 h-24 object-contain">
          </div>
          <div>
            <h3 class="text-2xl font-light mb-2 lato">Walizki w pełni skonfigurowane</h3>
            <p class="text-xl font-light lato">i dostosowane do transportu samochodem i samolotem</p>
          </div>
        </div>
        <div class="flex items-start gap-6">
          <div class="flex-shrink-0">
            <img src="{{ Vite::asset('resources/images/shared/icon-service.webp') }}" alt="Obsługa"
                 class="w-24 h-24 object-contain">
          </div>
          <div>
            <h3 class="text-2xl font-light mb-2 lato">Profesjonalna obsługa</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Video Section -->
  <section class="py-20 bg-black relative">
    <div class="container mx-auto px-4">
      <div class="relative aspect-video max-w-5xl mx-auto">
        <img src="{{ Vite::asset('resources/images/home/video-placeholder.webp') }}" alt="Video"
             class="w-full h-full object-cover opacity-50">
        <div class="absolute inset-0 flex items-center justify-center">
          <button
            class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-all">
            <svg class="w-12 h-12 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Product Details Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        <div>
          <swiper-container class="product-swiper" slides-per-view="1" navigation="true" pagination="true">
            <swiper-slide>
              <img src="{{ Vite::asset('resources/images/home/bike-bag-detail.webp') }}" alt="EVOC Bike Bag Pro"
                   class="w-full h-auto rounded-lg">
            </swiper-slide>
            <swiper-slide>
              <img src="{{ Vite::asset('resources/images/home/bike-bag-hero.webp') }}" alt="EVOC Bike Bag Pro"
                   class="w-full h-auto rounded-lg">
            </swiper-slide>
            <swiper-slide>
              <img src="{{ Vite::asset('resources/images/home/gallery-1.webp') }}" alt="EVOC Bike Bag Pro"
                   class="w-full h-auto rounded-lg">
            </swiper-slide>
          </swiper-container>
        </div>
        <div>
          <h2 class="text-5xl font-semibold mb-4">
            <span class="font-bold">EVOC</span> Bike Bag Pro
          </h2>
          <p class="text-3xl font-light mb-8 leading-relaxed">
            Połączenie bezpieczeństwa, lekkości i funkcjonalności
          </p>
          <ul class="space-y-4 text-xl font-light mb-8 list-disc list-inside">
            <li>EVOC Bike Bag Pro 305L</li>
            <li>Bezpieczny transport roweru – idealna do modeli MTB, gravel, triathlon, enduro, downhill (do 29")</li>
            <li>Proste i szybkie pakowanie – dzięki systemowi Bike Stand, Frame Pad i Disc Protection</li>
            <li>Stabilna konstrukcja z szeroką podstawą i lekkim, wytrzymałym stelażem</li>
            <li>Wygodne prowadzenie – solidne kółka i ergonomiczne uchwyty</li>
            <li>Zamek z opcją kłódki chroni rower przed dostępem osób trzecich</li>
            <li>Przemyślane wnętrze – kieszonki na narzędzia i akcesoria</li>
            <li>Pojemność 305 L, waga 9,6 kg – lekka, funkcjonalna i maksymalnie bezpieczna</li>
          </ul>
          <a href="{{ route('contact') }}"
             class="inline-block border-2 border-black px-10 py-4 rounded-full text-xl font-medium uppercase hover:bg-black hover:text-white transition-all">
            WYNAJMIJ JUŻ TERAZ
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="py-20 bg-gray-200">
    <div class="w-full max-w-[1920px] mx-auto px-4">
      <swiper-container class="gallery-swiper" slides-per-view="auto" space-between="24">
        <swiper-slide style="width: auto;">
          <img src="{{ Vite::asset('resources/images/home/gallery-1.webp') }}" alt="Gallery 1"
               class="h-64 w-auto rounded-lg object-cover">
        </swiper-slide>
        <swiper-slide style="width: auto;">
          <img src="{{ Vite::asset('resources/images/home/gallery-2.webp') }}" alt="Gallery 2"
               class="h-64 w-auto rounded-lg object-cover">
        </swiper-slide>
        <swiper-slide style="width: auto;">
          <img src="{{ Vite::asset('resources/images/home/gallery-3.webp') }}" alt="Gallery 3"
               class="h-64 w-auto rounded-lg object-cover">
        </swiper-slide>
        <swiper-slide style="width: auto;">
          <img src="{{ Vite::asset('resources/images/home/gallery-4.webp') }}" alt="Gallery 4"
               class="h-64 w-auto rounded-lg object-cover">
        </swiper-slide>
        <swiper-slide style="width: auto;">
          <img src="{{ Vite::asset('resources/images/home/gallery-5.webp') }}" alt="Gallery 5"
               class="h-64 w-auto rounded-lg object-cover">
        </swiper-slide>
        <swiper-slide style="width: auto;">
          <img src="{{ Vite::asset('resources/images/home/bike-bag-hero.webp') }}" alt="Gallery 6"
               class="h-64 w-auto rounded-lg object-cover">
        </swiper-slide>
        <swiper-slide style="width: auto;">
          <img src="{{ Vite::asset('resources/images/offer/bike-bag-detail.webp') }}" alt="Gallery 7"
               class="h-64 w-auto rounded-lg object-cover">
        </swiper-slide>
      </swiper-container>
    </div>
  </section>

  <!-- About Us Section -->
  <section class="py-20 bg-black text-white relative">
    <div class="container mx-auto px-4">
      <div class="relative min-h-[600px] flex items-center">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
             style="background-image: url('{{ Vite::asset('resources/images/home/about-us.webp') }}'); filter: grayscale(100%); opacity: 0.3;"></div>
        <div class="relative z-10 max-w-2xl">
          <h2 class="text-5xl font-normal mb-8">Kim jesteśmy?</h2>
          <div class="space-y-4 text-xl font-normal leading-relaxed">
            <p>Jesteśmy rowerowymi pasjonatami, którzy tak jak Wy szukali kiedyś idealnej walizki do transportu roweru
              na ulubione wakacje.</p>
            <p>Teraz wychodzimy do Was z ofertą, której sami nie mogliśmy znaleźć. Naszym celem jest spełnianie wymagań
              klientów i zapewnienie walizek rowerowych idealnych do transportu Waszego sprzętu, które jednocześnie
              ułatwiają poruszanie się po lotnisku czy w innych miejscach.</p>
            <p>Zapraszamy do korzystania z naszej wypożyczalni!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form Section -->
  <section id="kontakt" class="py-20 bg-white">
    <div class="container mx-auto px-4">
      @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
          {{ session('success') }}
        </div>
      @endif
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div>
          <h2 class="text-5xl font-normal mb-6">Skontaktuj się z nami</h2>
          <p class="text-xl font-normal leading-relaxed">
            Masz pytania odnośnie produktu, a może chcesz już zamówić walizkę?<br>
            Po prostu skorzystaj z naszego formularza.
          </p>
        </div>
        <div>
          <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
            @csrf
            <div>
              <label for="name" class="block text-xl font-normal mb-2">Twoje imię:</label>
              <input type="text" id="name" name="name" required
                     class="w-full bg-gray-200 rounded-full px-6 py-4 text-xl focus:outline-none focus:ring-2 focus:ring-black">
            </div>
            <div>
              <label for="email" class="block text-xl font-normal mb-2">Twój e-mail:</label>
              <input type="email" id="email" name="email" required
                     class="w-full bg-gray-200 rounded-full px-6 py-4 text-xl focus:outline-none focus:ring-2 focus:ring-black">
            </div>
            <div>
              <label for="message" class="block text-xl font-normal mb-2">Twoja wiadomość:</label>
              <textarea id="message" name="message" rows="6" required
                        class="w-full bg-gray-200 rounded-3xl px-6 py-4 text-xl focus:outline-none focus:ring-2 focus:ring-black resize-none"></textarea>
            </div>
            <button type="submit"
                    class="inline-block border-2 border-black px-10 py-4 rounded-full text-xl font-medium uppercase hover:bg-black hover:text-white transition-all">
              wyślij wiadomość
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection

