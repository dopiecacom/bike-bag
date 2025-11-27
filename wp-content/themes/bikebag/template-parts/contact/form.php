<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <div>
        <h1 class="text-5xl font-normal mb-6">Skontaktuj się z nami</h1>
        <p class="text-xl font-normal leading-relaxed">
          Masz pytania odnośnie produktu, a może chcesz już zamówić walizkę?<br>
          Po prostu skorzystaj z naszego formularza.
        </p>
      </div>
      <div>
        <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
          <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            Dziękujemy! Twoja wiadomość została wysłana.
          </div>
        <?php endif; ?>

        <div id="contact-form">
          <?php echo do_shortcode('[contact-form-7 title="Kontakt"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
