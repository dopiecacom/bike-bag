@extends('layouts.app')

@section('content')
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="flex flex-col sm:flex-row justify-between items-center max-w-7xl mx-auto mb-16">
        <div class="flex flex-col lg:max-w-xl">
          <h1 class="text-6xl font-medium mb-6">Co oferujemy?</h1>
          <p class="text-3xl font-normal leading-relaxed mb-8">
            Oferujemy wynajem walizek rowerowych <span class="font-bold">EVOC</span> <span
              class="font-semibold">Bike Bag Pro</span> – jednego z najlepszych rozwiązań do bezpiecznego
            transportu roweru w samolocie, pociągu czy samochodzie.
          </p>
        </div>

        <div class="min-w-[132px] sm:min-w-[240px] lg:min-w-[357px] mb-8">
          <img src="{{ Vite::asset('resources/images/shared/evoc-logo-large.webp') }}"
               alt="EVOC Logo"
               class="w-[132px] sm:w-[240px] lg:w-[357px]"
          />
        </div>
      </div>

      <!-- Main Product Image -->
      <div class="max-w-4xl mx-auto mb-16">
        <img src="{{ Vite::asset('resources/images/offer/bike-bag-detail.webp') }}" alt="EVOC Bike Bag Pro"
             class="w-full h-auto rounded-lg">
      </div>
    </div>

    <!-- Gallery Section -->
    <div class="bg-gray-200 py-20">
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
    </div>

    <div class="container mx-auto px-4">
      <!-- Description -->
      <div class="max-w-4xl mx-auto my-16">
        <p class="text-3xl font-normal leading-relaxed mb-8">
          Nasze walizki przeznaczone są do przewozu rowerów <span class="font-semibold">szosowych, triathlonowych</span>
          oraz <span class="font-semibold">MTB,</span> zapewniając im pełną ochronę w każdej podróży. EVOC
          Bike Bag Pro to połączenie bezpieczeństwa, lekkości i funkcjonalności:
        </p>

        <ul class="space-y-4 text-xl font-normal leading-relaxed list-disc list-inside mb-12">
          <li>Stabilny stelaż Bike Stand Pro chroni ramę i ułatwia montaż roweru</li>
          <li>Dwie zewnętrzne przegrody na koła z panelami zabezpieczającymi tarcze hamulcowe</li>
          <li>Wygodny transport dzięki dwóm tylnym kółkom i dodatkowemu przedniemu kółku na rączce</li>
          <li>Lekka konstrukcja – tylko 9,6 kg przy pojemności 305 l (wymiary: 36 × 85 × 147 cm)</li>
          <li>Pasuje do większości typów rowerów – szosa, gravel, MTB, triathlon</li>
        </ul>

        <p class="text-3xl font-normal leading-relaxed">
          Wypożycz walizkę na krótki lub dłuższy okres - dopasujemy ofertę do Twoich planów wyjazdowych.
          Zadbaj o swój rower i podróżuj bez stresu! Na życzenie oferujemy dostawę i odbiór walizki na terenie
          Krakowa i okolic za dodatkową opłatą.
        </p>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="max-w-4xl mx-auto mt-16 text-center">
      <a href="{{ route('pricing') }}"
         class="inline-block border-2 border-black px-10 py-4 rounded-full text-xl font-medium uppercase hover:bg-black hover:text-white transition-all">
        sprawdź cennik
      </a>
    </div>
  </section>
@endsection

