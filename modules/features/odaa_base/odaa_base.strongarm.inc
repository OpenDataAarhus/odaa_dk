<?php
/**
 * @file
 * odaa_base.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function odaa_base_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'date_format_odaa_long';
  $strongarm->value = 'd F Y @ H:i';
  $export['date_format_odaa_long'] = $strongarm;

  return $export;
}
