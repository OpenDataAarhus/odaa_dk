<div class="<?php print $classes; ?>"<?php print $attributes; ?> rel="<?php print $block_html_id; ?>">
  <div class="spotbox--inner some-other-class">
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
    <?php endif;?>
    <?php print render($title_suffix); ?>

    <?php print $content ?>
  </div>
</div>
