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
    <p class="font-black">Skontaktuj się z nami!</p>
    <a href="mailto:biuro@bikebag.pl" class="font-normal hover:underline">biuro@bikebag.pl</a>
    <a href="tel:+48732730732" class="font-normal hover:underline">Telefon: 732-730-732</a>
  </div>
</div>

<!-- Header -->
<header class="bg-white shadow-md h-[120px] sticky top-0 z-50 relative">
  <div class="container mx-auto px-4 h-full flex items-center justify-between">
    <a href="<?= esc_url($home_url); ?>" class="flex items-center">
      <img src="<?= get_template_directory_uri() . '/assets/images/shared/logo.webp' ?>" alt="Bike Bag Logo" class="h-20 w-20 object-contain">
    </a>

    <nav class="hidden lg:flex items-center gap-8">
      <a href="<?= esc_url($offer_url); ?>" class="text-xl <?= $is_offer ? 'font-bold' : 'font-normal'; ?> hover:font-bold transition-all">CO OFERUJEMY</a>
      <a href="<?= esc_url($pricing_url); ?>" class="text-xl <?= $is_pricing ? 'font-bold' : 'font-normal'; ?> hover:font-bold transition-all">CENNIK</a>
      <a href="<?= esc_url($contact_url); ?>" class="text-xl <?= $is_contact ? 'font-bold' : 'font-normal'; ?> hover:font-bold transition-all">KONTAKT</a>
      <a href="<?= esc_url($faq_url); ?>" class="text-xl <?= $is_faq ? 'font-bold' : 'font-normal'; ?> hover:font-bold transition-all">FAQ</a>
      <a href="<?= esc_url($terms_url); ?>" class="text-xl <?= $is_terms ? 'font-bold' : 'font-normal'; ?> hover:font-bold transition-all">REGULAMIN</a>
      <a href="#" class="w-8 h-8 flex items-center justify-center">
        <i class="fab fa-facebook text-xl"></i>
      </a>
    </nav>

    <button class="lg:hidden w-8 h-8 flex flex-col justify-center gap-1.5" id="mobile-menu-toggle" aria-label="Toggle menu">
      <span class="w-full h-0.5 bg-black transition-all"></span>
      <span class="w-full h-0.5 bg-black transition-all"></span>
      <span class="w-full h-0.5 bg-black transition-all"></span>
    </button>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden fixed inset-0 bg-white z-50" style="top: 152px; left: 0; right: 0; bottom: 0;">
      <div class="w-full h-full overflow-y-auto">
        <nav class="flex flex-col w-full">
          <a href="<?= esc_url($offer_url); ?>" class="text-3xl font-normal py-4 border-b border-gray-300 hover:font-bold transition-all text-center w-full <?= $is_offer ? 'font-bold' : ''; ?>">CO OFERUJEMY</a>
          <a href="<?= esc_url($pricing_url); ?>" class="text-3xl font-normal py-4 border-b border-gray-300 hover:font-bold transition-all text-center w-full <?= $is_pricing ? 'font-bold' : ''; ?>">CENNIK</a>
          <a href="<?= esc_url($contact_url); ?>" class="text-3xl font-normal py-4 border-b border-gray-300 hover:font-bold transition-all text-center w-full <?= $is_contact ? 'font-bold' : ''; ?>">KONTAKT</a>
          <a href="<?= esc_url($faq_url); ?>" class="text-3xl font-normal py-4 border-b border-gray-300 hover:font-bold transition-all text-center w-full <?= $is_faq ? 'font-bold' : ''; ?>">FAQ</a>
          <a href="<?= esc_url($terms_url); ?>" class="text-3xl font-normal py-4 border-b border-gray-300 hover:font-bold transition-all text-center w-full <?= $is_terms ? 'font-bold' : ''; ?>">REGULAMIN</a>
          <div class="flex justify-center py-4 border-b border-gray-300">
            <a href="#" class="w-8 h-8 flex items-center justify-center">
              <i class="fab fa-facebook text-2xl"></i>
            </a>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>