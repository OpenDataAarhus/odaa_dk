<?php
/**
 * @file
 * odaa_forum.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function odaa_forum_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function odaa_forum_node_info() {
  $items = array(
    'forum' => array(
      'name' => t('Forum'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
