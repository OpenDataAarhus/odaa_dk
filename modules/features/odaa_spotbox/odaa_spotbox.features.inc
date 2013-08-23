<?php
/**
 * @file
 * odaa_spotbox.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function odaa_spotbox_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function odaa_spotbox_views_api() {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function odaa_spotbox_node_info() {
  $items = array(
    'spotbox' => array(
      'name' => t('Spotbox'),
      'base' => 'node_content',
      'description' => t('Create a spotbox than can be displayed in content regions by inserting them with context.'),
      'has_title' => '1',
      'title_label' => t('Header'),
      'help' => '',
    ),
  );
  return $items;
}
