<?php
/**
 * @file
 * blob.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function odaa_user_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'user-user-field_ckan_api_key'
  $field_instances['user-user-field_ckan_api_key'] = array(
    'bundle' => 'user',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 1,
      ),
    ),
    'entity_type' => 'user',
    'fences_wrapper' => 'div',
    'field_name' => 'field_ckan_api_key',
    'label' => 'CKAN API key',
    'required' => 0,
    'settings' => array(
      'better_formats' => array(
        'allowed_formats' => array(
          'editor_html' => 'editor_html',
          'full_html' => 'full_html',
          'plain_text' => 'plain_text',
          'user_input' => 'user_input',
        ),
        'allowed_formats_toggle' => 0,
        'default_order_toggle' => 0,
        'default_order_wrapper' => array(
          'formats' => array(
            'editor_html' => array(
              'weight' => -9,
            ),
            'full_html' => array(
              'weight' => -10,
            ),
            'plain_text' => array(
              'weight' => -6,
            ),
            'user_input' => array(
              'weight' => -7,
            ),
          ),
        ),
      ),
      'text_processing' => 0,
      'user_register_form' => 0,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'size' => 60,
      ),
      'type' => 'text_textfield',
      'weight' => 7,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('CKAN API key');

  return $field_instances;
}
