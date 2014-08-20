<?php
/**
 * @file
 * odaa_notifications.features.inc
 */

/**
 * Implements hook_flag_default_flags().
 */
function odaa_notifications_flag_default_flags() {
  $flags = array();
  // Exported flag: "Follow".
  $flags['follow'] = array(
    'entity_type' => 'node',
    'title' => 'Follow',
    'global' => 0,
    'types' => array(
      0 => 'forum_topic',
    ),
    'flag_short' => 'Follow',
    'flag_long' => '',
    'flag_message' => '',
    'unflag_short' => 'Unfollow',
    'unflag_long' => '',
    'unflag_message' => '',
    'unflag_denied_text' => '',
    'link_type' => 'toggle',
    'weight' => 0,
    'show_in_links' => array(
      'full' => 'full',
      'teaser' => 'teaser',
      'diff_standard' => 'diff_standard',
      'token' => 'token',
      'rss' => 0,
      'search_index' => 0,
      'search_result' => 0,
    ),
    'show_as_field' => 1,
    'show_on_form' => 0,
    'access_author' => '',
    'show_contextual_link' => 0,
    'i18n' => 0,
    'module' => 'odaa_notifications',
    'locked' => array(
      0 => 'name',
    ),
    'api_version' => 3,
  );
  return $flags;

}
