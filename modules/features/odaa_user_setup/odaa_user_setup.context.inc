<?php
/**
 * @file
 * odaa_user_setup.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function odaa_user_setup_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'logged_in_user';
  $context->description = 'User login information';
  $context->tag = 'User';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'user' => 'user',
        'user/*' => 'user/*',
      ),
    ),
    'user' => array(
      'values' => array(
        'administrator' => 'administrator',
        'authenticated user' => 'authenticated user',
        'editor' => 'editor',
        'webmaster' => 'webmaster',
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
        'menu_block-4' => array(
          'module' => 'menu_block',
          'delta' => '4',
          'region' => 'secondary_content',
          'weight' => '-9',
        ),
        'heartbeat-useractivity' => array(
          'module' => 'heartbeat',
          'delta' => 'useractivity',
          'region' => 'tertiary_content',
          'weight' => '-10',
        ),
        'heartbeat-nodeactivity' => array(
          'module' => 'heartbeat',
          'delta' => 'nodeactivity',
          'region' => 'tertiary_content',
          'weight' => '-9',
        ),
      ),
    ),
  );
  $context->condition_mode = 1;

  // Translatables
  // Included for use with string extractors like potx.
  t('User');
  t('User login information');
  $export['logged_in_user'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'user';
  $context->description = 'User login information (not logged in)';
  $context->tag = 'User';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'user' => 'user',
        'user/register' => 'user/register',
        'user/password' => 'user/password',
      ),
    ),
    'user' => array(
      'values' => array(
        'anonymous user' => 'anonymous user',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'nodespotbox-18' => array(
          'module' => 'nodespotbox',
          'delta' => '18',
          'region' => 'secondary_content',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 1;

  // Translatables
  // Included for use with string extractors like potx.
  t('User');
  t('User login information (not logged in)');
  $export['user'] = $context;

  return $export;
}
