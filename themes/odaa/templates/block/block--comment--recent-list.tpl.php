<?php
/**
 * @file
 * 
 */
?>
<ul class="spotbox--list">
  <?php foreach ($items as $item) : ?>
  <li <?php print drupal_attributes($item['attributes']); ?>>
    <?php print render($item['data']); ?>
  </li>
  <?php endforeach; ?>
</ul>