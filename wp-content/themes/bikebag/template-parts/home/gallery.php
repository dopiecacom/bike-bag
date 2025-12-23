<?php
  $slides = [
      get_template_directory_uri() . '/assets/images/home/bike-bag-hero.webp',
      get_template_directory_uri() . '/assets/images/home/gallery-1.webp',
      get_template_directory_uri() . '/assets/images/home/gallery-3.webp',
      get_template_directory_uri() . '/assets/images/home/gallery-2.webp',
      get_template_directory_uri() . '/assets/images/home/gallery-5.webp',
      get_template_directory_uri() . '/assets/images/home/gallery-4.webp',
      get_template_directory_uri() . '/assets/images/home/gallery-6.webp',
  ];
?>

<section class="py-8 2xl:py-14 bg-gray-200">
  <div class="w-full container mx-auto px-4">
    <swiper-container
            class="gallery-thumbs max-w-[940px] 2xl:max-w-[1200px] mx-auto"
            slides-per-view="auto"
            space-between="24"
            watch-slides-progress="true"
    >
      <?php foreach ($slides as $index => $slide): ?>
        <swiper-slide style="width: auto; cursor: pointer;">
          <div class="relative bg-gray-200">
            <img src="<?= $slide ?>" alt="<?= "Gallery $index" ?>"
                 class="h-28 2xl:h-38 w-auto rounded-lg object-cover bg-gray-200 mix-blend-darken">
          </div>
        </swiper-slide>
      <?php endforeach; ?>
    </swiper-container>
  </div>
</section>
