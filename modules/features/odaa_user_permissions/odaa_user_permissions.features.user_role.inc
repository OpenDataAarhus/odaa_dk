<?php
/**
 * @file
 * odaa_user_permissions.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function odaa_user_permissions_user_default_roles() {
  $roles = array();

  // Exported role: editor.
  $roles['editor'] = array(
    'name' => 'editor',
    'weight' => 3,
  );

  // Exported role: webmaster.
  $roles['webmaster'] = array(
    'name' => 'webmaster',
    'weight' => 4,
  );

  return $roles;
}
