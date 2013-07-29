<?php
/**
 * @file
 * odaa_use_cases.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function odaa_use_cases_user_default_permissions() {
  $permissions = array();

  // Exported permission: create use_case content.
  $permissions['create use_case content'] = array(
    'name' => 'create use_case content',
    'roles' => array(
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any use_case content.
  $permissions['delete any use_case content'] = array(
    'name' => 'delete any use_case content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: delete own use_case content.
  $permissions['delete own use_case content'] = array(
    'name' => 'delete own use_case content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: edit any use_case content.
  $permissions['edit any use_case content'] = array(
    'name' => 'edit any use_case content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: edit own use_case content.
  $permissions['edit own use_case content'] = array(
    'name' => 'edit own use_case content',
    'roles' => array(
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'node',
  );

  return $permissions;
}
