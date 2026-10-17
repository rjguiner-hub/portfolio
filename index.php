<?php
declare(strict_types=1);

require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/section_head.php';

// Load data
$profile   = require __DIR__ . '/data/profile.php';
$navLinks  = require __DIR__ . '/data/nav.php';
$education = require __DIR__ . '/data/education.php';
$projects  = require __DIR__ . '/data/projects.php';
$contacts  = require __DIR__ . '/data/contacts.php';
$techStack = require __DIR__ . '/data/techstack.php';

// Render page
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/navbar.php';
?>
<main>
  <?php
  require __DIR__ . '/sections/home.php';
  require __DIR__ . '/sections/education.php';
  require __DIR__ . '/sections/projects.php';
  require __DIR__ . '/sections/contact.php';
  ?>
</main>
<?php
require __DIR__ . '/sections/techstack.php';
require __DIR__ . '/includes/footer.php';
