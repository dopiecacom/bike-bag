<section class="py-12 2xl:py-20 bg-white">
  <div class="container mx-auto px-6 sm:px-10 lg:px-12 xl:px-0">
    <div class="flex flex-col 2xl:flex-row justify-between items-center max-w-7xl mx-auto mb-16">
      <div class="flex flex-col lg:max-w-[752px]">
        <h1 class="text-[32px] 2xl:text-[56px] font-medium">Co oferujemy?</h1>
        <p class="2xl:text-2xl mb-8 2xl:mb-0">
          Oferujemy wynajem walizek rowerowych <span class="font-bold">EVOC</span> <span
            class="font-semibold">Bike Bag Pro</span> – jednego z najlepszych rozwiązań do bezpiecznego
          transportu roweru w samolocie, pociągu czy samochodzie.
        </p>
      </div>

      <div class="min-w-[132px] 2xl:min-w-[357px] mt-4">
        <img src="<?= get_template_directory_uri() . '/assets/images/shared/evoc-logo-large.webp' ?>"
             alt="EVOC Logo"
             class="w-[132px] 2xl:w-[357px]"
        />
      </div>
    </div>

    <div class="relative lg:max-w-[752px] 2xl:max-w-7xl mx-auto overflow-hidden">
      <swiper-container class="product-swiper max-w-[214px] 2xl:max-w-[740px] mx-auto"
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

      <div class="swiper-arrow custom-prev-button absolute top-1/2 left-0 -translate-y-1/2 z-10 cursor-pointer">
        <i class="fa-solid fa-chevron-left px-3 py-0.5 text-bike-purple text-3xl"></i>
      </div>

      <div class="swiper-arrow custom-next-button absolute top-1/2 right-0 -translate-y-1/2 z-10">
        <i class="fa-solid fa-chevron-right px-3 py-0.5 text-bike-purple text-3xl cursor-pointer"></i>
      </div>
    </div>
  </div>
</section>
