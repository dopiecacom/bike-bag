<?php
/**
 * Template for Terms page
 *
 * @package BikeBag
 */

get_header();
?>

<section class="py-12 2xl:py-20 bg-white">
  <div class="max-w-[1144px] mx-auto px-6 sm:px-10 lg:px-12 xl:px-0">
    <?php get_template_part('template-parts/terms/content'); ?>
  </div>
</section>

<?php
get_footer();
