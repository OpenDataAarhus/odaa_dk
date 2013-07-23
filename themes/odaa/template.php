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
function odaa_menu_tree__menu_block__1($variables) {
  return '<ul class="main-menu">' . $variables['tree'] . '</ul>';
}

// Secondary menu
function odaa_menu_tree__menu_block__2($variables) {
  return '<ul class="secondary-menu">' . $variables['tree'] . '</ul>';
}

// Sub menu
function odaa_menu_tree__menu_block__3($variables) {
  return '<ul class="sub-menu">' . $variables['tree'] . '</ul>';
}

/**
 * Implements hook_theme().
 *
 * Add new theme functions used to modify the recent comment list.
 */
function odaa_theme() {
  return array(
    'spotbox_recent_comment' => array(
      'variables' => array('comment' => NULL),
      'template' => 'templates/spotbox-recent-comment'
    ),
  );
}

/**
 * Implements theme_menu_link().
 */
function odaa_menu_link($variables) {

  // Check if the class array is empty.
  if(empty($variables['element']['#attributes']['class'])){
    unset($variables['element']['#attributes']['class']);
  }

  $element = $variables['element'];

  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }

  // Add default class to a tag
  $element['#localized_options']['attributes']['class'] = array(
    'menu-item',
  );

  // Make sure text string is treated as html by l function.
  $element['#localized_options']['html'] = true;

  $output = l('<span>'.$element['#title'].'</span>', $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}


/**
 * Implements template_preprocess_html().
 *
 * Add classes to body.
 */
function odaa_preprocess_html(&$variables) {
  // Remove default classes.
  $variables['classes_array'] = array();

  // Add front class.
  if (!empty($variables['is_front'])) {
    $variables['classes_array'][] = 'front';
  }

  // Add logged in class.
  if (!empty($variables['logged_in'])) {
    $variables['classes_array'][] = 'logged-in';
  }

  // Add the node type class (except for frontpage).
  if (isset($variables['page']['#type']) && empty($variables['is_front'])) {
    $variables['classes_array'][] = drupal_html_class('node-type-' . $variables['page']['#type']);
  }
}


/**
 * Implements template_preprocess_block().
 */
function odaa_preprocess_block(&$variables) {
  switch ($variables['block']->delta) {
    case 'datasets':
      $variables['classes_array'][] = 'search-spotbox';
      break;

    default:
      $variables['classes_array'][] = 'spotbox';
      break;
  }
}

function odaa_preprocess_page(&$variables, $hook) {
  if (isset($variables['is_front']))
    unset($variables['page']['content']['system_main']['default_message']);
}

/**
 * Returns HTML for a list of recent comments to be displayed in the comment block.
 *
 * @ingroup themeable
 */
function odaa_comment_block() {
  $items = array();
  $number = variable_get('comment_block_count', 10);
  foreach (comment_get_recent($number) as $comment) {
    $data = array(
      '#theme' => 'spotbox_recent_comment',
      '#comment' => $comment,
    );
    
    $items[] = array(
      'data' => drupal_render($data),
      'class' => array('spotbox--list-item'),
    );
  }

  if ($items) {
    return theme('item_list', array('items' => $items));
  }
  else {
    return t('No comments available.');
  }
}