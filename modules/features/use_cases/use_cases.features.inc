<?php
/**
 * @file
 * use_cases.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function use_cases_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function use_cases_views_api() {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function use_cases_image_default_styles() {
  $styles = array();

  // Exported image style: usecase_list.
  $styles['usecase_list'] = array(
    'name' => 'usecase_list',
    'effects' => array(
      4 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 224,
          'height' => 107,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function use_cases_node_info() {
  $items = array(
    'use_case' => array(
      'name' => t('Use case'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
