<?php

$home_url = home_url('/');
$offer_url = get_permalink(get_page_by_path('co-oferujemy'));
$pricing_url = get_permalink(get_page_by_path('cennik'));
$contact_url = get_permalink(get_page_by_path('kontakt'));
$faq_url = get_permalink(get_page_by_path('faq'));
$terms_url = get_permalink(get_page_by_path('regulamin'));

// Fallback URLs if pages don't exist
if (!$offer_url) $offer_url = $home_url . 'co-oferujemy/';
if (!$pricing_url) $pricing_url = $home_url . 'cennik/';
if (!$contact_url) $contact_url = $home_url . 'kontakt/';
if (!$faq_url) $faq_url = $home_url . 'faq/';
if (!$terms_url) $terms_url = $home_url . 'regulamin/';

$current_page = get_queried_object();
$is_offer = (is_page('co-oferujemy') || (isset($current_page->post_name) && $current_page->post_name === 'co-oferujemy'));
$is_pricing = (is_page('cennik') || (isset($current_page->post_name) && $current_page->post_name === 'cennik'));
$is_contact = (is_page('kontakt') || (isset($current_page->post_name) && $current_page->post_name === 'kontakt'));
$is_faq = (is_page('faq') || (isset($current_page->post_name) && $current_page->post_name === 'faq'));
$is_terms = (is_page('regulamin') || (isset($current_page->post_name) && $current_page->post_name === 'regulamin'));
$is_home = is_front_page();
?>
<div class="bg-black h-8 flex items-center justify-center">
  <div class="container mx-auto px-4 flex items-center justify-center gap-8 text-white text-sm">
    <p class="hidden sm:block font-black">Skontaktuj się z nami!</p>
    <div class="flex space-x-2">
      <svg class="w-5 h-5 fill-bike-purple" fill="currentColor" viewBox="0 0 20 20">
        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
      </svg>
      <a href="mailto:biuro@bikebag.pl" class="hover:underline">biuro@bikebag.pl</a>
    </div>

    <div class="flex space-x-2">
      <svg class="w-5 h-5 fill-bike-purple" fill="currentColor" viewBox="0 0 20 20">
        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
      </svg>

      <a href="tel:+48732730732" class="hover:underline">Telefon: 732-730-732</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="bg-white shadow-soft h-[72px] lg:h-[120px] sticky top-0 z-50 relative">
  <div class="max-w-4xl 2xl:container mx-auto px-4 h-full flex items-center justify-between">
    <a href="<?= esc_url($home_url); ?>" class="flex items-center">
      <img src="<?= get_template_directory_uri() . '/assets/images/shared/logo.webp' ?>"
           alt="Bike Bag Logo"
           class="h-10 lg:h-20 lg:w-36 object-contain"
      />
    </a>

    <nav class="hidden lg:flex items-center gap-8">
      <a href="<?= esc_url($offer_url); ?>" class="text-xl <?= $is_offer ? 'font-bold' : 'font-normal'; ?> hover:font-bold transition-all">CO OFERUJEMY</a>
      <a href="<?= esc_url($pricing_url); ?>" class="text-xl <?= $is_pricing ? 'font-bold' : 'font-normal'; ?> hover:font-bold transition-all">CENNIK</a>
      <a href="<?= esc_url($contact_url); ?>" class="text-xl <?= $is_contact ? 'font-bold' : 'font-normal'; ?> hover:font-bold transition-all">KONTAKT</a>
      <a href="<?= esc_url($faq_url); ?>" class="text-xl <?= $is_faq ? 'font-bold' : 'font-normal'; ?> hover:font-bold transition-all">FAQ</a>
      <a href="<?= esc_url($terms_url); ?>" class="text-xl <?= $is_terms ? 'font-bold' : 'font-normal'; ?> hover:font-bold transition-all">REGULAMIN</a>
      <a href="#" class="w-8 h-8 flex items-center justify-center">
        <i class="fab fa-facebook text-bike-purple hover:text-black text-3xl transition-colors"></i>
      </a>
    </nav>

    <button class="lg:hidden w-8 h-8 flex flex-col justify-center gap-1.5 z-50 relative" id="mobile-menu-toggle" aria-label="Toggle menu">
      <span class="w-full h-0.5 bg-black transition-all" id="hamburger-line-1"></span>
      <span class="w-full h-0.5 bg-black transition-all" id="hamburger-line-2"></span>
      <span class="w-full h-0.5 bg-black transition-all" id="hamburger-line-3"></span>
    </button>
    
    <div id="mobile-menu-overlay"
         class="hidden lg:hidden fixed inset-0 bg-black/50 z-40 transition-opacity duration-300"
         style="top: 121px; left: 0; right: 0; bottom: 0;"
    ></div>
    
    <div id="mobile-menu" class="hidden lg:hidden fixed h-fit inset-0 bg-transparent z-50 pointer-events-none" style="top: 121px; left: 0; right: 0; bottom: 0;">
      <div class="w-full h-full overflow-y-auto bg-[#D3D3D3] shadow-2xl transform -translate-x-full transition-transform duration-300 ease-in-out">
        <nav class="flex flex-col w-full">
          <a href="<?= esc_url($offer_url); ?>" class="text-3xl font-normal py-4 border-b border-white hover:font-bold transition-all text-center w-full <?= $is_offer ? 'font-bold' : ''; ?>">CO OFERUJEMY</a>
          <a href="<?= esc_url($pricing_url); ?>" class="text-3xl font-normal py-4 border-b border-white hover:font-bold transition-all text-center w-full <?= $is_pricing ? 'font-bold' : ''; ?>">CENNIK</a>
          <a href="<?= esc_url($contact_url); ?>" class="text-3xl font-normal py-4 border-b border-white hover:font-bold transition-all text-center w-full <?= $is_contact ? 'font-bold' : ''; ?>">KONTAKT</a>
          <a href="<?= esc_url($faq_url); ?>" class="text-3xl font-normal py-4 border-b border-white hover:font-bold transition-all text-center w-full <?= $is_faq ? 'font-bold' : ''; ?>">FAQ</a>
          <a href="<?= esc_url($terms_url); ?>" class="text-3xl font-normal py-4 border-b border-white hover:font-bold transition-all text-center w-full <?= $is_terms ? 'font-bold' : ''; ?>">REGULAMIN</a>
          <div class="flex justify-center py-4">
            <a href="#" class="w-10 h-10 flex items-center justify-center">
              <i class="fab fa-facebook text-3xl"></i>
            </a>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>