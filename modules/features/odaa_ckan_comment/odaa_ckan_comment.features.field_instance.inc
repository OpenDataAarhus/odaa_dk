<?php
/**
 * @file
 * odaa_ckan_comment.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function odaa_ckan_comment_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-dataset-field_ckan_id'
  $field_instances['node-dataset-field_ckan_id'] = array(
    'bundle' => 'dataset',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 0,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_ckan_id',
    'label' => 'CKAN ID',
    'required' => 1,
    'settings' => array(
      'text_processing' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'size' => 60,
      ),
      'type' => 'text_textfield',
      'weight' => 31,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('CKAN ID');

  return $field_instances;
}
