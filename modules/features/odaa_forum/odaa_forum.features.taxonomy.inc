<?php
/**
 * @file
 * odaa_forum.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function odaa_forum_taxonomy_default_vocabularies() {
  return array(
    'forum_categories' => array(
      'name' => 'Forum categories',
      'machine_name' => 'forum_categories',
      'description' => '',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
