<?php
/**
 * Template for Pricing page
 *
 * @package BikeBag
 */

get_header();
?>

<section class="py-20 bg-white">
  <div class="max-w-4xl mx-auto px-4 lg:px-0">
    <h1 class="text-5xl font-semibold mb-16">Cennik</h1>
  </div>

    <?php get_template_part('template-parts/pricing/header'); ?>
    <?php get_template_part('template-parts/pricing/table'); ?>
    <?php get_template_part('template-parts/pricing/additional-info'); ?>
</section>

<?php
get_footer();
