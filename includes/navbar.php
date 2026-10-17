<nav class="navbar navbar-dark site-nav sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#home">RG<span class="brand-dot"></span></a>
    <ul class="navbar-nav flex-row ms-auto gap-2 gap-sm-4">
      <?php foreach ($navLinks as $link): ?>
        <li class="nav-item">
          <a class="nav-link" href="#<?= e($link['id']) ?>"><?= e($link['label']) ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</nav>
