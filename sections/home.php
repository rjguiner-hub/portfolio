<section id="home">
  <div class="container">
    <div class="row align-items-center g-5 flex-column-reverse flex-md-row">
      <div class="col-lg-7">
        <div class="hero-kicker"><span class="status-dot"></span> Available for learning &amp; projects</div>
        <div class="hero-role"><?= e($profile['role']) ?></div>
        <h1 class="hero-title"><span class="gradient-text">Hi, I'm <?= e($profile['name']) ?>.</span></h1>
        <p class="hero-description"><?= e($profile['purpose']) ?></p>

        <div class="hero-actions">
          <a href="#projects" class="btn-main">View My Work <i class="bi bi-arrow-right ms-1"></i></a>
          <a href="#contact" class="btn-outline">Let's Connect</a>
        </div>

        <div class="hero-socials">
          <a class="social-mini" href="https://github.com/rjguiner-hub" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="bi bi-github"></i></a>
          <a class="social-mini" href="https://www.facebook.com/rjay.818049" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a class="social-mini" href="mailto:rjguiner.email@gmail.com" aria-label="Email"><i class="bi bi-envelope"></i></a>
        </div>
      </div>

      <div class="col-lg-5 text-center">
        <div class="profile-wrap">
          <img src="<?= e(profile_photo($profile['photo'])) ?>" class="profile-image" alt="Profile picture of <?= e($profile['name']) ?>">
          <div class="floating-card"><i class="bi bi-code-slash"></i> Please don't ask me to fix your printer.</div>
        </div>
      </div>
    </div>
  </div>
</section>
