<?php
/**
 * @file
 * odaa_forum.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function odaa_forum_user_default_permissions() {
  $permissions = array();

  // Exported permission: create forum_topic content.
  $permissions['create forum_topic content'] = array(
    'name' => 'create forum_topic content',
    'roles' => array(
      'administrator' => 'administrator',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any forum_topic content.
  $permissions['delete any forum_topic content'] = array(
    'name' => 'delete any forum_topic content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own forum_topic content.
  $permissions['delete own forum_topic content'] = array(
    'name' => 'delete own forum_topic content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any forum_topic content.
  $permissions['edit any forum_topic content'] = array(
    'name' => 'edit any forum_topic content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own forum_topic content.
  $permissions['edit own forum_topic content'] = array(
    'name' => 'edit own forum_topic content',
    'roles' => array(
      'administrator' => 'administrator',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'node',
  );

  return $permissions;
}
