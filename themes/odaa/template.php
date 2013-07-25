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

// User content menu
function odaa_menu_tree__menu_block__4($variables) {
  return '<ul class="spotbox--list">' . $variables['tree'] . '</ul>';
}

// User actions menu
function odaa_menu_tree__menu_block__5($variables) {
  return '<ul class="spotbox--list">' . $variables['tree'] . '</ul>';
}

/**
 * Implements hook_theme().
 *
 * Add new theme functions used to modify the recent comment list.
 */
function odaa_theme() {
  return array(
    'odaa_comment_recent_inner' => array(
      'variables' => array('comment' => NULL),
      'template' => 'templates/block/block--comment--recent-inner',
    ),
    'odaa_comment_recent_list' => array(
      'variables' => array('items' => NULL),
      'template' => 'templates/block/block--comment--recent-list',
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

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '><span>' . $output . '</span>' . $sub_menu . "</li>\n";
}


/**
 * Implements theme_menu_link__menu_block().
 *
 * TODO: Refactor so we don't need a function for each menu.
 */
function odaa_menu_link__menu_block__4($variables) {

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

  $element['#attributes']['class'][] = 'spotbox-menu--list-item';

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '><span><i class="icon-angle-right"></i>' . $output . '</span>' . $sub_menu . "</li>\n";
}

/**
 * Implements theme_menu_link__menu_block().
 *
 * TODO: Refactor so we don't need a function for each menu.
*/
function odaa_menu_link__menu_block__5($variables) {

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

  $element['#attributes']['class'][] = 'spotbox-menu--list-item';

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '><span><i class="icon-angle-right"></i>' . $output . '</span>' . $sub_menu . "</li>\n";
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

  // Add first argument to body
  $url = arg();
  if (isset($url[1]) > 0) {
    $variables['classes_array'][] = 'node-id-' . $url[1];
  }

  // Add the node type class (except for frontpage).
  if (isset($variables['page']['#type']) && empty($variables['is_front'])) {
    if(arg(0) == 'user'){
      $variables['classes_array'][] = 'user';
    }else{
      $variables['classes_array'][] = drupal_html_class('node-type-' . $variables['page']['#type']);
    }
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

    case 3: // Sub menu
      $variables['classes_array'][] = 'sub-menu-wrapper';
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
      '#theme' => 'odaa_comment_recent_inner',
      '#comment' => $comment,
    );

    $items[] = array(
      'data' => $data,
      'attributes' => array(
        'class' => array('spotbox--list-item'),
      ),
    );
  }

  if ($items) {
    return theme('odaa_comment_recent_list', array('items' => $items));
  }
  else {
    return t('No comments available.');
  }
}


/**
 * Implements hook_form_alter().
 */
function odaa_form_alter(&$form, &$form_state, $form_id){
  switch ($form_id) {
    case 'user_register_form':
      unset($form['account']['account']);
      $form['#prefix']  =
        '<div class="page--content-wrapper">
          <section class="page--content">
            <h1 class="page--title">'.t('User register').'</h1>';
      $form['#suffix']  =  '</div>';
      break;
    case 'user_login':
      unset($form['name']['#description']);
      unset($form['pass']['#description']);
      $form['#prefix']  =
          '<div class="page--content-wrapper">
             <section class="page--content">
               <h1 class="page--title">'.t('User login').'</h1>';
      $form['#suffix']  =  '</div>';
      $form['actions']['#prefix']  =
              '<div class="user-login--actions">
              <a href="/user/password" class="user-login--forgot-password">'.t('Forgot password?').'</a>';
      $form['actions']['#suffix']  = '</div>';
      break;
      case 'views_exposed_form':
        $form['sort_by']['#attributes']['class'][] = 'search--actions-sort';
        $form['title']['#attributes']['class'][] = 'search-form--content-block--input';
        $form['submit']['#attributes']['class'][] = 'search-form--content-block--button';
        unset($form['reset']);
      break;
  }
}
