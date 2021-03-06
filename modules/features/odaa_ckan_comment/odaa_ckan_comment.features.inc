<?php
/**
 * @file
 * odaa_ckan_comment.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function odaa_ckan_comment_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function odaa_ckan_comment_views_api() {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function odaa_ckan_comment_node_info() {
  $items = array(
    'dataset' => array(
      'name' => t('Dataset'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
