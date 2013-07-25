<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php $row_no = 0;?>
<div class="use-cases--wrapper">
  <?php foreach ($rows as $id => $row): ?>
    <?php
      $row_no = $row_no + 1;
      $element_no = ($row_no % 3);
      if($element_no == 1){$element_class_no = 'use-cases--list-item-first';} // first element
      if($element_no == 2){$element_class_no = 'use-cases--list-item-second';} //second element
      if($element_no == 0){$element_class_no = 'use-cases--list-item-third';} //third element
    ?>
    <div class="<?php echo $element_class_no;?>">
      <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' '.$element_no.'"';  } ?>>
        <?php print $row; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
