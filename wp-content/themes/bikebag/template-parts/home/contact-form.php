<section id="kontakt" class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
      <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
        Dziękujemy! Twoja wiadomość została wysłana.
      </div>
    <?php endif; ?>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <div>
        <h2 class="text-5xl font-normal mb-6">Skontaktuj się z nami</h2>
        <p class="text-xl font-normal leading-relaxed">
          Masz pytania odnośnie produktu, a może chcesz już zamówić walizkę?<br>
          Po prostu skorzystaj z naszego formularza.
        </p>
      </div>
      <div>
        <?= do_shortcode('[contact-form-7 id="1" title="Kontakt"]'); ?>
        <!-- Fallback form if CF7 is not installed -->
        <form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="POST" class="space-y-6">
          <input type="hidden" name="action" value="bikebag_contact_form">
          <?php wp_nonce_field('bikebag_contact', 'bikebag_contact_nonce'); ?>
          <div>
            <label for="name" class="block text-xl font-normal mb-2">Twoje imię:</label>
            <input type="text" id="name" name="name" required
                   class="w-full bg-gray-200 rounded-full px-6 py-4 text-xl focus:outline-none focus:ring-2 focus:ring-black">
          </div>
          <div>
            <label for="email" class="block text-xl font-normal mb-2">Twój e-mail:</label>
            <input type="email" id="email" name="email" required
                   class="w-full bg-gray-200 rounded-full px-6 py-4 text-xl focus:outline-none focus:ring-2 focus:ring-black">
          </div>
          <div>
            <label for="message" class="block text-xl font-normal mb-2">Twoja wiadomość:</label>
            <textarea id="message" name="message" rows="6" required
                      class="w-full bg-gray-200 rounded-3xl px-6 py-4 text-xl focus:outline-none focus:ring-2 focus:ring-black resize-none"></textarea>
          </div>
          <button type="submit"
                  class="inline-block border-2 border-black px-10 py-4 rounded-full text-xl font-medium uppercase hover:bg-black hover:text-white transition-all">
            wyślij wiadomość
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
