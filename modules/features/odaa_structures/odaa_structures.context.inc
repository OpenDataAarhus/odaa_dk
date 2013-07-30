<?php
/**
 * @file
 * odaa_structures.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function odaa_structures_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'user_sub';
  $context->description = 'User sub pages';
  $context->tag = 'User';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'user/*' => 'user/*',
      ),
    ),
    'user' => array(
      'values' => array(
        'authenticated user' => 'authenticated user',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'menu_block-6' => array(
          'module' => 'menu_block',
          'delta' => '6',
          'region' => 'secondary_content',
          'weight' => '-10',
        ),
        'menu_block-5' => array(
          'module' => 'menu_block',
          'delta' => '5',
          'region' => 'secondary_content',
          'weight' => '-9',
        ),
        'menu_block-4' => array(
          'module' => 'menu_block',
          'delta' => '4',
          'region' => 'secondary_content',
          'weight' => '-8',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('User');
  t('User sub pages');
  $export['user_sub'] = $context;

  return $export;
}
