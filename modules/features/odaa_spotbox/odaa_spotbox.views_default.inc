<?php
/**
 * @file
 * odaa_spotbox.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function odaa_spotbox_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'spotbox';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Spotbox';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Spotbox';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  /* Field: Header icon (excluded) */
  $handler->display->display_options['fields']['field_spotbox_header_icon']['id'] = 'field_spotbox_header_icon';
  $handler->display->display_options['fields']['field_spotbox_header_icon']['table'] = 'field_data_field_spotbox_header_icon';
  $handler->display->display_options['fields']['field_spotbox_header_icon']['field'] = 'field_spotbox_header_icon';
  $handler->display->display_options['fields']['field_spotbox_header_icon']['ui_name'] = 'Header icon (excluded)';
  $handler->display->display_options['fields']['field_spotbox_header_icon']['label'] = '';
  $handler->display->display_options['fields']['field_spotbox_header_icon']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_spotbox_header_icon']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_spotbox_header_icon']['alter']['text'] = '<i class="icon-[field_spotbox_header_icon-value]"></i>';
  $handler->display->display_options['fields']['field_spotbox_header_icon']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_spotbox_header_icon']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_spotbox_header_icon']['hide_empty'] = TRUE;
  /* Field: Spotbox header */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['ui_name'] = 'Spotbox header';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['text'] = '<h2 class="spotbox--header">[field_spotbox_header_icon][title]</h2>';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Spotbox image */
  $handler->display->display_options['fields']['field_spotbox_image']['id'] = 'field_spotbox_image';
  $handler->display->display_options['fields']['field_spotbox_image']['table'] = 'field_data_field_spotbox_image';
  $handler->display->display_options['fields']['field_spotbox_image']['field'] = 'field_spotbox_image';
  $handler->display->display_options['fields']['field_spotbox_image']['ui_name'] = 'Spotbox image';
  $handler->display->display_options['fields']['field_spotbox_image']['label'] = '';
  $handler->display->display_options['fields']['field_spotbox_image']['element_type'] = 'div';
  $handler->display->display_options['fields']['field_spotbox_image']['element_class'] = 'spotbox--image';
  $handler->display->display_options['fields']['field_spotbox_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_spotbox_image']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_spotbox_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_spotbox_image']['settings'] = array(
    'image_style' => 'odaa_panorama_medium',
    'image_link' => '',
  );
  /* Field: Spotbox content */
  $handler->display->display_options['fields']['field_spotbox_content']['id'] = 'field_spotbox_content';
  $handler->display->display_options['fields']['field_spotbox_content']['table'] = 'field_data_field_spotbox_content';
  $handler->display->display_options['fields']['field_spotbox_content']['field'] = 'field_spotbox_content';
  $handler->display->display_options['fields']['field_spotbox_content']['ui_name'] = 'Spotbox content';
  $handler->display->display_options['fields']['field_spotbox_content']['label'] = '';
  $handler->display->display_options['fields']['field_spotbox_content']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_spotbox_content']['alter']['strip_tags'] = TRUE;
  $handler->display->display_options['fields']['field_spotbox_content']['alter']['preserve_tags'] = '<p> <a>';
  $handler->display->display_options['fields']['field_spotbox_content']['element_type'] = 'div';
  $handler->display->display_options['fields']['field_spotbox_content']['element_class'] = 'spotbox--content';
  $handler->display->display_options['fields']['field_spotbox_content']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_spotbox_content']['element_default_classes'] = FALSE;
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['default_action'] = 'not found';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'spotbox' => 'spotbox',
  );

  /* Display: Spotbox (block) */
  $handler = $view->new_display('block', 'Spotbox (block)', 'spotbox_block');
  $handler->display->display_options['block_description'] = 'Spotbox (block)';
  $export['spotbox'] = $view;

  return $export;
}
