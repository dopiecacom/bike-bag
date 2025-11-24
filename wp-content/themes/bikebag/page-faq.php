<?php
/**
 * Template for FAQ page
 *
 * @package BikeBag
 */

get_header();
?>

<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <h1 class="text-5xl font-semibold mb-16 text-center">
      <span class="font-semibold">Najczęściej </span>
      <span class="font-normal">zadawane pytania:</span>
    </h1>

    <?php get_template_part('template-parts/faq/accordion'); ?>
  </div>
</section>

<?php
get_footer();
