<section id="projects">
  <div class="container">
    <?php render_section_head('Featured Projects', "A selection of projects I've built while learning and developing my skills."); ?>

    <div class="row g-4">
      <?php foreach ($projects as $project): ?>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card project-card p-4">
            <div class="project-number">PROJECT <?= str_pad((string) $project['id'], 2, '0', STR_PAD_LEFT) ?></div>
            <h4 class="h5 fw-bold mt-2"><?= e($project['name']) ?></h4>
            <p class="text-muted"><?= e($project['description']) ?></p>
            <div class="d-flex flex-wrap gap-2 mt-auto">
              <?php foreach ($project['tech'] as $tech): ?>
                <span class="badge tech-badge"><?= e($tech) ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
