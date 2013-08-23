<div class="<?php print $classes; ?>"<?php print $attributes; ?> rel="<?php print $block_html_id; ?>">
  <div class="spotbox--inner">
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h2 class="spotbox--header"><i class="icon-comments-alt"></i><?php print $block->subject ?></h2>
    <?php endif;?>
    <?php print render($title_suffix); ?>

    <?php print $content ?>
  </div>
</div>
