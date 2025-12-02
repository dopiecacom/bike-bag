<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>

</main>

<footer class="bg-black text-white">
  <div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-8">
      <div>
        <img src="<?= get_template_directory_uri() . '/assets/images/shared/logo-footer.webp' ?>"
             alt="Bike Bag Logo"
             class="h-20 w-36 object-contain mb-6"
        />

        <div class="space-y-4 text-xl font-normal">
          <div class="flex items-center gap-3">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            <p>ul. 28 Lipca 1943/3, Kraków 30-223</p>
          </div>

          <div class="flex items-center gap-3">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
            </svg>
            <a href="tel:+48732730732" class="hover:underline">+48 732 730 732</a>
          </div>

          <div class="flex items-center gap-3">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
            </svg>
            <a href="mailto:biuro@bikebag.pl" class="hover:underline">biuro@bikebag.pl</a>
          </div>
        </div>
      </div>

      <div>
        <h3 class="text-xl font-bold mb-4">MAPA STRONY:</h3>
        <ul class="space-y-2 text-xl font-normal">
          <?php
          $current_page = get_queried_object();
          $is_offer = (is_page('co-oferujemy') || (isset($current_page->post_name) && $current_page->post_name === 'co-oferujemy'));
          $is_pricing = (is_page('cennik') || (isset($current_page->post_name) && $current_page->post_name === 'cennik'));
          $is_contact = (is_page('kontakt') || (isset($current_page->post_name) && $current_page->post_name === 'kontakt'));
          $is_faq = (is_page('faq') || (isset($current_page->post_name) && $current_page->post_name === 'faq'));
          $is_terms = (is_page('regulamin') || (isset($current_page->post_name) && $current_page->post_name === 'regulamin'));
          
          $offer_url = get_permalink(get_page_by_path('co-oferujemy'));
          $pricing_url = get_permalink(get_page_by_path('cennik'));
          $contact_url = get_permalink(get_page_by_path('kontakt'));
          $faq_url = get_permalink(get_page_by_path('faq'));
          $terms_url = get_permalink(get_page_by_path('regulamin'));
          
          if (!$offer_url) $offer_url = home_url('/co-oferujemy/');
          if (!$pricing_url) $pricing_url = home_url('/cennik/');
          if (!$contact_url) $contact_url = home_url('/kontakt/');
          if (!$faq_url) $faq_url = home_url('/faq/');
          if (!$terms_url) $terms_url = home_url('/regulamin/');
          ?>
          <li><a href="<?= esc_url($offer_url); ?>" class="hover:underline <?= $is_offer ? 'underline' : ''; ?>">Co oferujemy</a></li>
          <li><a href="<?= esc_url($pricing_url); ?>" class="hover:underline <?= $is_pricing ? 'underline' : ''; ?>">Cennik</a></li>
          <li><a href="<?= esc_url($contact_url); ?>" class="hover:underline <?= $is_contact ? 'underline' : ''; ?>">Kontakt</a></li>
          <li><a href="<?= esc_url($faq_url); ?>" class="hover:underline <?= $is_faq ? 'underline' : ''; ?>">FAQ</a></li>
          <li><a href="<?= esc_url($terms_url); ?>" class="hover:underline <?= $is_terms ? 'underline' : ''; ?>">Regulamin</a></li>
          <li><a href="#" class="hover:underline">Polityka prywatności</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="bg-[#2a2a2a] py-2">
    <div class="container mx-auto px-4">
      <p class="text-sm font-medium text-[#ebebeb] text-center">Copyright by Emsit 2025</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>