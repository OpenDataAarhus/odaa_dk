<?php

  function main_menu($active) {

    $main_menu = array(
      'Forsiden' => '#',
      'Datasæt' => 'dataset.php',
      'Organisation' => '#',
      'Grupper' => '#',
      'Community' => 'community.php',
      'Om' => '#'
    );

    $output = '<ul class="main-menu">';

    $count = 0;

    foreach ($main_menu as $name => $url) {
      if ($count == $active) {
        $output.= '<li><a href="' . $url .'" class="menu-item active"><span>' . $name . '</span></a></li>';
      }
      else {
        $output.= '<li><a href="' . $url .'" class="menu-item"><span>' . $name . '</span></a></li>';
      }

      $count++;
    }

    $output.= '</ul>';

    return $output;
  }

?>
