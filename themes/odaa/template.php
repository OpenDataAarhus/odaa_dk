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
 * Adds wrapper classes for the main menu and secondary menu.
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

// User accounting
function odaa_menu_tree__menu_block__6($variables) {
  return '<ul class="spotbox--list">' . $variables['tree'] . '</ul>';
}

// Community sub menu
function odaa_menu_tree__menu_block__7($variables) {
  return '<ul class="sub-menu">' . $variables['tree'] . '</ul>';
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
  return _odaa_menu_styling($variables, 'menu-item');
}

/**
 * Helper function for menu blocks.
 */
function _odaa_menu_styling($variables, $class, $icon = FALSE, $span = FALSE) {
  $element = $variables['element'];

  $sub_menu = '';

  if (isset($element['#below'])) {
    $sub_menu = drupal_render($element['#below']);
  }

  // Add default class to a tag.
  $element['#localized_options']['attributes']['class'][] = $class;

  // Make sure text string is treated as html by l function.
  $element['#localized_options']['html'] = TRUE;

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . (($span) ? '<span>' : '') . $output . (($span) ? '</span>' : '') . $sub_menu . "</li>\n";
}

/**
 * Implements theme_menu_link__menu_block().
 */
function odaa_menu_link__menu_block__4($variables) {
  return _odaa_menu_styling($variables, 'spotbox-menu--list-item', TRUE);
}

/**
 * Implements theme_menu_link__menu_block().
 */
function odaa_menu_link__menu_block__5($variables) {
  return _odaa_menu_styling($variables, 'spotbox-menu--list-item', TRUE);
}

/**
 * Implements theme_menu_link__menu_block().
 */
function odaa_menu_link__menu_block__6($variables) {
  return _odaa_menu_styling($variables, 'spotbox-menu--list-item', TRUE);
}

/**
 * Implements template_preprocess_html().
 *
 * Add classes to body.
 */
function odaa_preprocess_html(&$variables) {
  // Add conditional CSS for IE.
  drupal_add_css(path_to_theme() . '/css/ie8.css', array(
    'group' => CSS_THEME,
    'browsers' => array(
      'IE' => 'lte IE 8',
      '!IE' => FALSE,
    ),
    'weight' => 999,
    'preprocess' => FALSE,
  ));

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

  // Add first argument to body.
  $url = arg();
  if (isset($url[1])) {
    $variables['classes_array'][] = 'node-id-' . $url[1];
  }

  // Add the node type class (except for front page).
  if (isset($variables['page']['#type']) && empty($variables['is_front'])) {
    if (arg(0) == 'user') {
      $variables['classes_array'][] = 'user';
    }
    else {
      $variables['classes_array'][] = drupal_html_class('node-type-' . $variables['page']['#type']);
    }
  }
}


/**
 * Implements template_preprocess_block().
 */
function odaa_preprocess_block(&$variables) {
  if (isset($variables['block']->delta)) {
    if ($variables['block']->delta == 3 && $variables['block']->module == 'menu_block') {
      // Sub menu.
      $variables['classes_array'][] = 'sub-menu-wrapper';
    }
    else {
      switch ($variables['block']->delta) {
        case 'datasets':
          $variables['classes_array'][] = 'search-spotbox';
          break;

        default:
          $variables['title_attributes_array']['class'] = array(
            'spotbox--header',
          );
          $variables['classes_array'][] = 'spotbox';
          break;
      }
    }
  }
}
/**
 * Implements template_preprocess_pageß().
 */
function odaa_preprocess_page(&$variables, $hook) {
  // Unset default front page message.
  if (isset($variables['is_front'])) {
    unset($variables['page']['content']['system_main']['default_message']);
  }

  // Template suggestion for add content node.
  if ((arg(0) == 'node') && (arg(1) == 'add') || (arg(0) == 'node') && (arg(2) == 'edit')) {
    $variables['theme_hook_suggestions'][] = 'page__nodeform';
  }

  // Template suggestion for edit user.
  if ((arg(0) == 'user') && (arg(2) == 'edit')) {
    $variables['theme_hook_suggestions'][] = 'page__user_edit';
  }

  // Template suggestion for edot comment node.
  if ((arg(0) == 'comment') && (arg(2) == 'edit')) {
    $variables['theme_hook_suggestions'][] = 'page__comment__nodeform';
  }
}

/**
 * Returns HTML for a list of recent comments to be displayed in the comment
 * block.
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

  if (isset($items)) {
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
      $form['#prefix'] = '<div class="page--content-wrapper"><section class="page--content"><h1 class="page--title">' . t('User register') . '</h1>';
      $form['#suffix'] = '</section></div>';
      break;

    case 'user_login':
      unset($form['name']['#description']);
      unset($form['pass']['#description']);
      $form['#prefix'] = '<div class="page--content-wrapper"><section class="page--content"><h1 class="page--title">' . t('User login') . '</h1>';
      $form['#suffix'] = '</div>';
      $form['actions']['#prefix'] = '<div class="user-login--actions"><a href="/user/password" class="user-login--forgot-password">' . t('Forgot password?') . '</a>';
      $form['#suffix'] = '</section></div>';
      break;

    case 'user_pass':
      unset($form['name']['#description']);
      $form['#prefix'] = '<div class="page--content-wrapper"><section class="page--content"><h1 class="page--title">' . t('User register') . '</h1>';
      $form['#suffix'] = '</section></div>';
      break;

    case 'views_exposed_form':
      $form['sort_by']['#attributes']['class'][] = 'search--actions-sort';
      $form['title']['#attributes']['class'][] = 'search-form--content-block--input';
      $form['submit']['#attributes']['class'][] = 'search-form--content-block--button';
      unset($form['reset']);
      break;

    case 'user_login_block':
      unset($form['name']['#description']);
      $form['#prefix'] = '<div class="page--content-wrapper"><section class="page--content">';
      $form['#suffix'] = '</section></div>';
      break;
  }
}

/**
 * MISSING DOCUMENTATION.
 *
 * @param $variables
 *
 * @return string
 */
function odaa_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  // Edit node breadcrumb.
  if (arg(2) === 'edit') {
    // Store home.
    $home = $breadcrumb[0];

    // Empty the array.
    $breadcrumb = array();

    // Add home.
    $breadcrumb[] = $home;

    // Add custom text.
    $breadcrumb[] = t('Edit');
  }

  if (!empty($breadcrumb)) {
    $menu_title = menu_get_active_title();

    if (!empty($menu_title)) {
      // Add the menu title of the current page to the breadcrumb.
      $breadcrumb[] = menu_get_active_title();
    }
    else {
      // Add the title of the current page to the breadcrumb.
      $breadcrumb[] = drupal_get_title();
    }
  }

  $output = implode(' / ', $breadcrumb);
  return $output;
}

/**
 * Implements hook_preprocess_region().
 *
 * Add theme logo path and image to navigation region.
 */
function odaa_preprocess_region(&$variables) {
  if ($variables['region'] == 'navigation') {
    global $theme_key;
    $uri = theme_get_setting('logo_path', $theme_key);
    $variables['logo'] = file_create_url($uri);
    if (empty($uri)) {
      $variables['logo'] = drupal_get_path('theme', $theme_key) . '/logo.png';
    }
  }
}
