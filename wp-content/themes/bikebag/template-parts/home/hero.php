<section class="pt-4 lg:pt-20 pb-12 lg:pb-8 bg-white">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-4 items-center lg:items-start">
      <div class="lg:-mt-10 px-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bike-bag-hero.webp"
             alt="EVOC Bike Bag Pro"
             class="max-w-[245px] lg:max-w-[420px] 2xl:max-w-[460px] w-full h-auto mx-auto lg:mr-0"
        />
      </div>

      <div class="mx-auto lg:ml-0">
        <h1 class="text-[32px] 2xl:text-6xl font-light leading-8 2xl:leading-15 mb-6">
          <span class="block">Oferujemy wynajem</span>
          <span class="block">walizek rowerowych</span>
          <span class="block">
            <span class="font-bold">EVOC</span> <span class="font-medium">BIKE BAG PRO</span>
          </span>
        </h1>

        <a href="<?php echo esc_url(get_permalink(get_page_by_path('kontakt')) ?: home_url('/kontakt/')); ?>"
           class="inline-block border-2 border-black px-10 lg:px-4 py-4 lg:py-2 rounded-full text-xl lg:text-base 2xl:text-xl font-medium uppercase hover:bg-black hover:text-white transition-all"
        >
          wynajmij już teraz
        </a>
      </div>
    </div>
  </div>
</section>
