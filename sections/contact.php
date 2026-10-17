<section id="contact">
  <div class="container">
    <?php render_section_head('Contact', 'Want to work together or just say hi? Reach out through any of these.'); ?>

    <div class="row g-4">
      <?php foreach ($contacts as $contact): ?>
        <?php $href = trim($contact['href']) !== '' ? $contact['href'] : '#contact'; ?>
        <div class="col-12 col-md-6 col-lg-4">
          <a class="contact-card" href="<?= e($href) ?>"<?= $contact['external'] ? ' target="_blank" rel="noopener noreferrer"' : '' ?>>
            <span class="contact-icon"><i class="bi <?= e($contact['icon']) ?>"></i></span>
            <span>
              <p class="contact-label"><?= e($contact['label']) ?></p>
              <p class="contact-value"><?= e($contact['value']) ?></p>
            </span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
