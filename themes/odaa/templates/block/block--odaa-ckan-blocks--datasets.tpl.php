<div class="<?php print $classes; ?>"<?php print $attributes; ?> rel="<?php print $block_html_id; ?>">
  <div class="search-spotbox--inner">
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h2 class="search-spotbox--header"><?php print $block->subject ?></h2>
    <?php endif;?>
    <?php print render($title_suffix); ?>

    <?php print $content ?>
  </div>
</div>
