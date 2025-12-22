<?php
/**
 * Template for FAQ page
 *
 * @package BikeBag
 */

get_header();
?>

<section class="py-12 2xl:py-16 bg-white">
  <div class="max-w-[1144px] mx-auto px-6">
    <h1 class="text-[32px] mb-6 leading-8">
      <span class="font-semibold">Najczęściej </span> <br/>
      <span class="font-normal">zadawane pytania:</span>
    </h1>

    <?php get_template_part('template-parts/faq/accordion'); ?>
  </div>
</section>

<?php
get_footer();
