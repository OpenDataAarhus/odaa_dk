<?php

/**
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "adaptivetheme_subtheme" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "adaptivetheme_subtheme".
 * 2. Uncomment the required function to use.
 * 3. Read carefully, especially within adaptivetheme_subtheme_preprocess_html(), there
 *    are extra goodies you might want to leverage such as a very simple way of adding
 *    stylesheets for Internet Explorer and a browser detection script to add body classes.
 */


/**
 * Implements theme_menu_tree().
 *
 * Addes wrapper clases for the main menu and secondary menu.
 */

// Main menu
function odaa_menu_tree__menu_block__1($vars) {
  return '<ul class="main-menu">' . $vars['tree'] . '</ul>';
}

/**
 * Implements theme_menu_link().
 */
function odaa_menu_link($vars) {

  // Check if the class array is empty.
  if(empty($vars['element']['#attributes']['class'])){
    unset($vars['element']['#attributes']['class']);
  }

  $element = $vars['element'];

  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }

  // Add default class to a tag
  $element['#localized_options']['attributes']['class'] = array(
    'menu-item',
  );

  // Make sure text string is treated as html by l function
  $element['#localized_options']['html'] = true;

  $output = l('<span>'.$element['#title'].'</span>', $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

/**
 * Implements template_preprocess_block().
 */
function odaa_preprocess_block(&$variables) {
  if (isset($variables['elements']['content']['#class'])) {
    // Logged in
    $variables['classes_array'][] = $variables['elements']['content']['#class'];
  } 
  else if (isset($variables['elements']['#class'])) {
    // Logged out
    $variables['classes_array'][] = $variables['elements']['#class'];
  } 
  else {
    $variables['classes_array'][] = 'spotbox';
  }
}