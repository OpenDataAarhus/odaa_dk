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
    'description' => '<strong>Limited markdown is available:</strong>
<ul>
  <li>Enter = new paragraph</li>
  <li>Shift + enter = new line</li>
  <li>*Single asterisks* or _single underscores_ = <em>Emphasis</em></li>
  <li>**Double** or __double__ = <strong>Strong</strong></li>
  <li>This is [a link](http://the.link.example.com "The optional title text")</li>
</ul>
<p>For complete details on the Markdown syntax, see the <a href="http://daringfireball.net/projects/markdown/syntax">Markdown documentation</a> and <a href="http://michelf.com/projects/php-markdown/extra/">Markdown Extra documentation</a> for tables and more.</p>
<p>Allowed elements: links, emphasized text, strong text, blockquote, code snippets, lists, tables</p>
<p>Web- and e-mails is automatically converted to links.</p>',
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
      'weight' => 2,
    ),
  );

  // Exported field_instance: 'node-use_case-field_image_content'
  $field_instances['node-use_case-field_image_content'] = array(
    'bundle' => 'use_case',
    'deleted' => 0,
    'description' => '',
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
      'max_resolution' => '',
      'min_resolution' => '',
      'title_field' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'image',
      'settings' => array(
        'allowed_schemes' => array(
          'public' => 'public',
          'vimeo' => 0,
          'youtube' => 0,
        ),
        'allowed_types' => array(
          'audio' => 0,
          'document' => 0,
          'image' => 'image',
          'video' => 0,
        ),
        'browser_plugins' => array(
          'media_browser_plus--media_browser_my_files' => 0,
          'media_browser_plus--media_browser_thumbnails' => 0,
          'media_default--media_browser_1' => 0,
          'media_default--media_browser_my_files' => 0,
          'media_internet' => 0,
          'upload' => 'upload',
          'youtube' => 0,
        ),
        'preview_image_style' => 'thumbnail',
        'progress_indicator' => 'throbber',
      ),
      'type' => 'image_image',
      'weight' => 1,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('<strong>Limited markdown is available:</strong>
<ul>
  <li>Enter = new paragraph</li>
  <li>Shift + enter = new line</li>
  <li>*Single asterisks* or _single underscores_ = <em>Emphasis</em></li>
  <li>**Double** or __double__ = <strong>Strong</strong></li>
  <li>This is [a link](http://the.link.example.com "The optional title text")</li>
</ul>
<p>For complete details on the Markdown syntax, see the <a href="http://daringfireball.net/projects/markdown/syntax">Markdown documentation</a> and <a href="http://michelf.com/projects/php-markdown/extra/">Markdown Extra documentation</a> for tables and more.</p>
<p>Allowed elements: links, emphasized text, strong text, blockquote, code snippets, lists, tables</p>
<p>Web- and e-mails is automatically converted to links.</p>');
  t('Body');
  t('Image');

  return $field_instances;
}
