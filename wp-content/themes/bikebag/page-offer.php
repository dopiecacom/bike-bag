<?php
/**
 * Template for "Co oferujemy" page
 *
 * @package BikeBag
 */

get_header();
?>

<section class="offer-header-section"><?php get_template_part('template-parts/offer/header'); ?></section>
<section class="offer-gallery-section"><?php get_template_part('template-parts/home/gallery'); ?></section>
<section class="offer-description-section"><?php get_template_part('template-parts/offer/description'); ?></section>
<section class="offer-cta-section"><?php get_template_part('template-parts/offer/cta'); ?></section>

<?php
get_footer();
