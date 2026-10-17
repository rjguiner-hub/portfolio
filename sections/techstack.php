<div class="stack-strip">
  <div class="container text-center">
    <p class="fw-semibold mb-3">This website is built with</p>
    <div class="d-flex flex-wrap justify-content-center gap-2">
      <?php foreach ($techStack as $tech): ?>
        <span class="badge rounded-pill px-3 py-2"><?= e($tech) ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</div>
