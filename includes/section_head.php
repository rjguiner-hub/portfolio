<?php
/** Usage: render_section_head('Title', 'Subtitle'); */
function render_section_head(string $title, string $subtitle): void
{ ?>
  <div class="section-head">
    <h2><?= e($title) ?></h2>
    <hr>
    <p class="text-muted mb-0"><?= e($subtitle) ?></p>
  </div>
<?php }
