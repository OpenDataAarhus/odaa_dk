<?php
/**
 * @file
 * odaa_use_cases.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function odaa_use_cases_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-use_case-field_body'
  $field_instances['node-use_case-field_body'] = array(
    'bundle' => 'use_case',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '<p>This is the more in depth description of the use case. This should probably contain all kinds of information, links images and other fancy stuff. Notice that limited Markdown formatting is available, see <a href="http://daringfireball.net/projects/markdown/syntax" target="_blank">Markdown documentation</a> and <a href="http://michelf.com/projects/php-markdown/extra/" target="_blank">Markdown Extra documentation</a>.</p>
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
        'weight' => 2,
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
              'weight' => 0,
            ),
            'full_html' => array(
              'weight' => 1,
            ),
            'plain_text' => array(
              'weight' => 10,
            ),
            'user_input' => array(
              'weight' => -7,
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
      'weight' => 3,
    ),
  );

  // Exported field_instance: 'node-use_case-field_description'
  $field_instances['node-use_case-field_description'] = array(
    'bundle' => 'use_case',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Describe your use case so it seems interesting and makes people click it! The description is displayed below the image in the use case block on the use cases page.',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 3,
      ),
    ),
    'entity_type' => 'node',
    'fences_wrapper' => 'div',
    'field_name' => 'field_description',
    'label' => 'Description',
    'required' => 1,
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
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'rows' => 5,
      ),
      'type' => 'text_textarea',
      'weight' => 2,
    ),
  );

  // Exported field_instance: 'node-use_case-field_image_content'
  $field_instances['node-use_case-field_image_content'] = array(
    'bundle' => 'use_case',
    'deleted' => 0,
    'description' => 'Spice up your use case with a fancy image! The image will get cropped to 1200x300, så it is a good idea to keep that aspect ratio. If in doubt just let us crop the image for you.You get a preview when you upload an image.',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'image',
        'settings' => array(
          'image_link' => '',
          'image_style' => 'odaa_panorama_large',
        ),
        'type' => 'image',
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
    'field_name' => 'field_image_content',
    'label' => 'Image',
    'required' => 0,
    'settings' => array(
      'alt_field' => 0,
      'default_image' => 0,
      'file_directory' => '',
      'file_extensions' => 'png gif jpg jpeg',
      'max_filesize' => '',
      'max_resolution' => '1200x1200',
      'min_resolution' => '',
      'title_field' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'image',
      'settings' => array(
        'preview_image_style' => 'odaa_panorama_small',
        'progress_indicator' => 'throbber',
      ),
      'type' => 'image_image',
      'weight' => 1,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('<p>This is the more in depth description of the use case. This should probably contain all kinds of information, links images and other fancy stuff. Notice that limited Markdown formatting is available, see <a href="http://daringfireball.net/projects/markdown/syntax" target="_blank">Markdown documentation</a> and <a href="http://michelf.com/projects/php-markdown/extra/" target="_blank">Markdown Extra documentation</a>.</p>
<ul>
  <li>Allowed elements: links, emphasis, code, blockquotes, headers (h3 - h6), lists, tables</li>
  <li>Shift + enter = new line</li>
  <li>Web- and e-mails is automatically converted to links.</li>
</ul>');
  t('Body');
  t('Describe your use case so it seems interesting and makes people click it! The description is displayed below the image in the use case block on the use cases page.');
  t('Description');
  t('Image');
  t('Spice up your use case with a fancy image! The image will get cropped to 1200x300, så it is a good idea to keep that aspect ratio. If in doubt just let us crop the image for you.You get a preview when you upload an image.');

  return $field_instances;
}
