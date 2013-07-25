<?php

  // Main menu
  function main_menu($active) {

    $main_menu = array(
      'Forsiden' => 'frontpage.php',
      'Datasæt' => 'datasets.php',
      'Community' => 'community.php',
      'Use cases' => 'use-cases.php',
      'Om ODAA' => 'about.php'
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


  // Secondary menu
  function secondary_menu($active) {

    $secondary_menu = array(
      'Log ind' => 'user-login.php',
      'Opret bruger' => 'user-register.php'
    );

    $output = '<ul class="secondary-menu">';

    $count = 0;
    $count_last = count($secondary_menu) - 1;

    foreach ($secondary_menu as $name => $url) {
      $count == $count_last ? $last = ' last' : $last = '';

      if ($active != false && $count == $active) {
        $output.= '<li><a href="' . $url .'" class="menu-item active'.$last.'"><span>' . $name . '</span></a></li>';
      }
      else {
        $output.= '<li><a href="' . $url .'" class="menu-item'.$last.'"><span>' . $name . '</span></a></li>';
      }

      $count++;
    }

    $output.= '</ul>';

    return $output;
  }

  // Logged in menu
  function logged_in_menu($active) {

    $logged_in_menu = array(
      'Min konto' => 'user-profile.php',
      'Log ud' => '#'
    );

    $output = '<ul class="secondary-menu">';

    $count = 0;
    $count_last = count($logged_in_menu) - 1;

    foreach ($logged_in_menu as $name => $url) {
      $count == $count_last ? $last = ' last' : $last = '';

      if ($count == $active) {
        $output.= '<li><a href="' . $url .'" class="menu-item active'.$last.'"><span>' . $name . '</span></a></li>';
      }
      else {
        $output.= '<li><a href="' . $url .'" class="menu-item'.$last.'"><span>' . $name . '</span></a></li>';
      }

      $count++;
    }

    $output.= '</ul>';

    return $output;
  }

?>
