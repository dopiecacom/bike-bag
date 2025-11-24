<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
      <div>
        <swiper-container class="product-swiper" slides-per-view="1" navigation="true" pagination="true">
          <swiper-slide>
            <img src="<?= get_template_directory_uri() . '/assets/images/home/bike-bag-detail.webp' ?>" alt="EVOC Bike Bag Pro"
                 class="w-full h-auto rounded-lg">
          </swiper-slide>
          <swiper-slide>
            <img src="<?= get_template_directory_uri() . '/assets/images/home/bike-bag-hero.webp' ?>" alt="EVOC Bike Bag Pro"
                 class="w-full h-auto rounded-lg">
          </swiper-slide>
          <swiper-slide>
            <img src="<?= get_template_directory_uri() . '/assets/images/home/gallery-1.webp' ?>" alt="EVOC Bike Bag Pro"
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
        <a href="<?= esc_url(get_permalink(get_page_by_path('kontakt')) ?: home_url('/kontakt/')); ?>"
           class="inline-block border-2 border-black px-10 py-4 rounded-full text-xl font-medium uppercase hover:bg-black hover:text-white transition-all">
          WYNAJMIJ JUŻ TERAZ
        </a>
      </div>
    </div>
  </div>
</section>
