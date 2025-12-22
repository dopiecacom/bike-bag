<section class="py-12 2xl:py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row-reverse gap-12 items-start">
      <div class="flex flex-col w-full">
        <h2 class="text-[32px] 2xl:text-5xl font-semibold leading-8 2xl:leading-12">
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

        <div class="flex mx-auto lg:ml-0">
          <a href="<?= esc_url(get_permalink(get_page_by_path('kontakt')) ?: home_url('/kontakt/')); ?>"
             class="inline-block border-2 border-black mx-auto lg:ml-0 px-10 py-4 2xl:py-3 rounded-full text-xl font-medium uppercase hover:bg-black hover:text-white transition-all">
            WYNAJMIJ JUŻ TERAZ
          </a>
        </div>
      </div>

      <div class="relative overflow-hidden max-w-sm">
        <swiper-container class="product-swiper"
                          slides-per-view="1"
                          navigation-prev-el=".custom-prev-button"
                          navigation-next-el=".custom-next-button"
                          navigation="true"
                          thumbs-swiper=".gallery-thumbs"
        >
          <swiper-slide>
            <img src="<?= get_template_directory_uri() . '/assets/images/home/gallery-1.webp' ?>" alt="EVOC Bike Bag Pro"
                 class="w-full h-auto rounded-lg">
          </swiper-slide>
          <swiper-slide>
            <img src="<?= get_template_directory_uri() . '/assets/images/home/gallery-2.webp' ?>" alt="EVOC Bike Bag Pro"
                 class="w-full h-auto rounded-lg">
          </swiper-slide>
          <swiper-slide>
            <img src="<?= get_template_directory_uri() . '/assets/images/home/gallery-3.webp' ?>" alt="EVOC Bike Bag Pro"
                 class="w-full h-auto rounded-lg">
          </swiper-slide>
          <swiper-slide>
            <img src="<?= get_template_directory_uri() . '/assets/images/home/gallery-4.webp' ?>" alt="EVOC Bike Bag Pro"
                 class="w-full h-auto rounded-lg">
          </swiper-slide>
          <swiper-slide>
            <img src="<?= get_template_directory_uri() . '/assets/images/home/gallery-5.webp' ?>" alt="EVOC Bike Bag Pro"
                 class="w-full h-auto rounded-lg">
          </swiper-slide>
          <swiper-slide>
            <img src="<?= get_template_directory_uri() . '/assets/images/home/bike-bag-hero.webp' ?>" alt="EVOC Bike Bag Pro"
                 class="w-full h-auto rounded-lg">
          </swiper-slide>
          <swiper-slide>
            <img src="<?= get_template_directory_uri() . '/assets/images/home/bike-bag-detail.webp' ?>" alt="EVOC Bike Bag Pro"
                 class="w-full h-auto rounded-lg">
          </swiper-slide>
        </swiper-container>

        <div class="swiper-arrow custom-prev-button absolute top-1/2 left-0 -translate-y-1/2 z-10">
          <i class="fa-solid fa-chevron-left px-3 py-0.5 text-bike-purple text-3xl"></i>
        </div>

        <div class="swiper-arrow custom-next-button absolute top-1/2 right-0 -translate-y-1/2 z-10">
          <i class="fa-solid fa-chevron-right px-3 py-0.5 text-bike-purple text-3xl"></i>
        </div>
      </div>
    </div>
  </div>
</section>
