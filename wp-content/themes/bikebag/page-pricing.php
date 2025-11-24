<?php
/**
 * Template for Pricing page
 *
 * @package BikeBag
 */

get_header();
?>

<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <h1 class="text-5xl font-semibold mb-16 text-center">Cennik</h1>

    <?php get_template_part('template-parts/pricing/header'); ?>
    <?php get_template_part('template-parts/pricing/table'); ?>
    <?php get_template_part('template-parts/pricing/additional-info'); ?>
</section>

<?php
get_footer();
