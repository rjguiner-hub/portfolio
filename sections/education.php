<section id="education">
  <div class="container">
    <?php render_section_head('Education', 'My academic background and the foundation behind my development journey.'); ?>

    <div class="row g-4 align-items-stretch">
      <div class="col-lg-4">
        <div class="info-panel">
          <div class="section-label">My journey</div>
          <h3>Learning. Building. Improving.</h3>
          <p class="mt-3">I'm continuously building my skills in programming, web development, databases, and software engineering through school and hands-on projects.</p>
          <div class="mt-4">
            <span class="badge rounded-pill px-3 py-2 tech-badge">Web Development</span>
            <span class="badge rounded-pill px-3 py-2 tech-badge ms-1">Programming</span>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="timeline">
          <?php foreach ($education as $item): ?>
            <article class="timeline-item">
              <h4 class="h5 fw-bold mb-1"><?= e($item['title']) ?></h4>
              <p class="school mb-1 fw-semibold"><?= e($item['school']) ?></p>
              <p class="text-muted small mb-2"><?= e($item['period']) ?></p>
              <p class="mb-0"><?= e($item['details']) ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
