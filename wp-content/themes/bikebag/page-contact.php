<?php
/**
 * Template for Contact page
 *
 * @package BikeBag
 */

get_header();
?>

  <section class="contact-form-section"><?php get_template_part('template-parts/contact/form'); ?></section>
  <section class="py-0">
    <div class="w-full h-96 overflow-hidden">
      <iframe
              src="https://www.google.com/maps?q=ul.+28%20%Lipca+1943+3,+30-223+Krak%C3%B3w,+Polska&output=embed"
              width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
  </section>

<?php
get_footer();

