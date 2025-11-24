<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/bike-bag-hero.webp" alt="EVOC Bike Bag Pro"
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
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('kontakt')) ?: home_url('/kontakt/')); ?>"
           class="inline-block border-2 border-black px-10 py-4 rounded-full text-xl font-medium uppercase hover:bg-black hover:text-white transition-all">
          wynajmij już teraz
        </a>
      </div>
    </div>
  </div>
</section>
