<section class="py-12 bg-white">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row-reverse gap-12 items-start">
      <div>
        <h2 class="text-[32px] 2xl:text-5xl font-semibold">
          <span class="font-bold">EVOC</span> Bike Bag Pro
        </h2>

        <p class="text-xl 2xl:text-[32px] font-light mb-6">
          Połączenie bezpieczeństwa, lekkości i funkcjonalności
        </p>

        <ul class="space-y-0.5 text-sm lg:text-base 2xl:text-xl font-light mb-8 list-disc list-inside">
          <li>EVOC Bike Bag Pro 305L</li>
          <li>Bezpieczny transport roweru – idealna do modeli MTB, gravel, triathlon, enduro, downhill (do 29")</li>
          <li>Proste i szybkie pakowanie – dzięki systemowi Bike Stand, Frame Pad i Disc Protection</li>
          <li>Stabilna konstrukcja z szeroką podstawą i lekkim, wytrzymałym stelażem</li>
          <li>Wygodne prowadzenie – solidne kółka i ergonomiczne uchwyty</li>
          <li>Zamek z opcją kłódki chroni rower przed dostępem osób trzecich</li>
          <li>Przemyślane wnętrze – kieszonki na narzędzia i akcesoria</li>
          <li>Pojemność 305 L, waga 9,6 kg – lekka, funkcjonalna i maksymalnie bezpieczna</li>
        </ul>

        <div class="flex mx-auto">
          <a href="<?= esc_url(get_permalink(get_page_by_path('kontakt')) ?: home_url('/kontakt/')); ?>"
             class="inline-block border-2 border-black mx-auto px-10 py-4 rounded-full text-xl font-medium uppercase hover:bg-black hover:text-white transition-all">
            WYNAJMIJ JUŻ TERAZ
          </a>
        </div>
      </div>

      <div class="overflow-hidden max-w-sm">
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
    </div>
  </div>
</section>
