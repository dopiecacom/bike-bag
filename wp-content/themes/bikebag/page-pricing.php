<?php
/**
 * Template for Pricing page
 *
 * @package BikeBag
 */

get_header();
?>

<section class="py-12 2xl:py-16 bg-white">
  <div class="max-w-[1144px] mx-auto px-6 sm:px-10 lg:px-12 xl:px-0">
    <h1 class="font-semibold text-[32px] mb-6 leading-8">
      Cennik
    </h1>
  </div>

    <?php get_template_part('template-parts/pricing/header'); ?>
    <?php get_template_part('template-parts/pricing/table'); ?>
    <?php get_template_part('template-parts/pricing/additional-info'); ?>
</section>

<?php
get_footer();
