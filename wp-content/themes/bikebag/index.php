<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package BikeBag
 */

get_header();
?>

<section class="home-hero-section"><?php get_template_part('template-parts/home/hero'); ?></section>
<section class="home-evoc-brand-section"><?php get_template_part('template-parts/home/evoc-brand'); ?></section>
<section class="home-info-banner-section"><?php get_template_part('template-parts/home/info-banner'); ?></section>
<section class="home-why-rent-section"><?php get_template_part('template-parts/home/why-rent'); ?></section>
<section class="home-video-section"><?php get_template_part('template-parts/home/video'); ?></section>
<section class="home-product-details-section"><?php get_template_part('template-parts/home/product-details'); ?></section>
<section class="home-gallery-section"><?php get_template_part('template-parts/home/gallery'); ?></section>
<section class="home-about-us-section"><?php get_template_part('template-parts/home/about-us'); ?></section>
<section class="home-contact-form-section"><?php get_template_part('template-parts/home/contact-form'); ?></section>

<?php
get_footer();
