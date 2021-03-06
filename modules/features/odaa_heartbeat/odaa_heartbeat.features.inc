<?php
/**
 * @file
 * odaa_heartbeat.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function odaa_heartbeat_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function odaa_heartbeat_views_api() {
  return array("api" => "3.0");
}
