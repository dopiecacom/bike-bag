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
          class="inline-block w-fit border-2 border-black px-10 py-4 rounded-full text-xl font-medium uppercase hover:bg-black hover:text-white transition-all">
    wyślij wiadomość
  </button>
</form>
