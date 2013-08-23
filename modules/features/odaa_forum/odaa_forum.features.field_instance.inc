<?php
/**
 * @file
 * odaa_forum.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function odaa_forum_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-forum_topic-field_body'
  $field_instances['node-forum_topic-field_body'] = array(
    'bundle' => 'forum_topic',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '<p>Limited Markdown formatting is available, see <a href="http://daringfireball.net/projects/markdown/syntax" target="_blank">Markdown documentation</a> and <a href="http://michelf.com/projects/php-markdown/extra/" target="_blank">Markdown Extra documentation</a>.</p>
<ul>
  <li>Allowed elements: links, emphasis, code, blockquotes, headers (h3 - h6), lists, tables</li>
  <li>Shift + enter = new line</li>
  <li>Web- and e-mails is automatically converted to links.</li>
</ul>',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
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
    'fences_wrapper' => 'div',
    'field_name' => 'field_body',
    'label' => 'Body',
    'required' => 0,
    'settings' => array(
      'better_formats' => array(
        'allowed_formats' => array(
          'editor_html' => 0,
          'full_html' => 0,
          'plain_text' => 0,
          'user_input' => 'user_input',
        ),
        'allowed_formats_toggle' => 1,
        'default_order_toggle' => 1,
        'default_order_wrapper' => array(
          'formats' => array(
            'editor_html' => array(
              'weight' => -49,
            ),
            'full_html' => array(
              'weight' => -48,
            ),
            'plain_text' => array(
              'weight' => -47,
            ),
            'user_input' => array(
              'weight' => -50,
            ),
          ),
        ),
      ),
      'text_processing' => 1,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'rows' => 7,
      ),
      'type' => 'text_textarea',
      'weight' => 2,
    ),
  );

  // Exported field_instance: 'node-forum_topic-field_category'
  $field_instances['node-forum_topic-field_category'] = array(
    'bundle' => 'forum_topic',
    'default_value' => array(
      0 => array(
        'tid' => 3,
      ),
    ),
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 1,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'fences_wrapper' => 'div',
    'field_name' => 'field_category',
    'label' => 'Kategori',
    'required' => 1,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'options',
      'settings' => array(),
      'type' => 'options_select',
      'weight' => 1,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('<p>Limited Markdown formatting is available, see <a href="http://daringfireball.net/projects/markdown/syntax" target="_blank">Markdown documentation</a> and <a href="http://michelf.com/projects/php-markdown/extra/" target="_blank">Markdown Extra documentation</a>.</p>
<ul>
  <li>Allowed elements: links, emphasis, code, blockquotes, headers (h3 - h6), lists, tables</li>
  <li>Shift + enter = new line</li>
  <li>Web- and e-mails is automatically converted to links.</li>
</ul>');
  t('Body');
  t('Kategori');

  return $field_instances;
}
