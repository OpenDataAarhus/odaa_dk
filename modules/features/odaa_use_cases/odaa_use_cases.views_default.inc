<?php
/**
 * @file
 * odaa_use_cases.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function odaa_use_cases_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'odaa_use_cases_list';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Use cases';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Use cases';
  $handler->display->display_options['css_class'] = 'page--content-wrapper';
  $handler->display->display_options['use_ajax'] = TRUE;
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['use_more_text'] = 'mere';
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['exposed_form']['options']['submit_button'] = 'Udfør';
  $handler->display->display_options['exposed_form']['options']['reset_button_label'] = 'Gendan';
  $handler->display->display_options['exposed_form']['options']['exposed_sorts_label'] = 'Sortér efter';
  $handler->display->display_options['exposed_form']['options']['expose_sort_order'] = FALSE;
  $handler->display->display_options['exposed_form']['options']['sort_asc_label'] = 'Stigende';
  $handler->display->display_options['exposed_form']['options']['sort_desc_label'] = 'Faldende';
  $handler->display->display_options['exposed_form']['options']['autosubmit_hide'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '12';
  $handler->display->display_options['pager']['options']['expose']['items_per_page_label'] = 'Antal elementer';
  $handler->display->display_options['pager']['options']['expose']['items_per_page_options_all_label'] = '- Alle -';
  $handler->display->display_options['pager']['options']['expose']['offset_label'] = 'Forskydning';
  $handler->display->display_options['pager']['options']['tags']['first'] = '« første';
  $handler->display->display_options['pager']['options']['tags']['previous'] = '‹ forrige';
  $handler->display->display_options['pager']['options']['tags']['next'] = 'næste ›';
  $handler->display->display_options['pager']['options']['tags']['last'] = 'sidste »';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['row_class'] = 'use-cases--list-item-inner';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = 'Here you can find the user creations with data from Odaa. You can also join in and create your own use cases.';
  $handler->display->display_options['header']['area']['format'] = 'editor_html';
  /* Field: Comment count (excluded) */
  $handler->display->display_options['fields']['comment_count']['id'] = 'comment_count';
  $handler->display->display_options['fields']['comment_count']['table'] = 'node_comment_statistics';
  $handler->display->display_options['fields']['comment_count']['field'] = 'comment_count';
  $handler->display->display_options['fields']['comment_count']['ui_name'] = 'Comment count (excluded)';
  $handler->display->display_options['fields']['comment_count']['label'] = '';
  $handler->display->display_options['fields']['comment_count']['exclude'] = TRUE;
  $handler->display->display_options['fields']['comment_count']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['comment_count']['alter']['text'] = '<a href="[path]" class="use-cases--list-footer-link">[comment_count]</a>';
  $handler->display->display_options['fields']['comment_count']['alter']['absolute'] = TRUE;
  $handler->display->display_options['fields']['comment_count']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['comment_count']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['comment_count']['element_wrapper_class'] = 'use-cases--list-footer-link';
  $handler->display->display_options['fields']['comment_count']['separator'] = '';
  $handler->display->display_options['fields']['comment_count']['suffix'] = ' comments';
  /* Field: Link (excluded) */
  $handler->display->display_options['fields']['view_node']['id'] = 'view_node';
  $handler->display->display_options['fields']['view_node']['table'] = 'views_entity_node';
  $handler->display->display_options['fields']['view_node']['field'] = 'view_node';
  $handler->display->display_options['fields']['view_node']['ui_name'] = 'Link (excluded)';
  $handler->display->display_options['fields']['view_node']['label'] = '';
  $handler->display->display_options['fields']['view_node']['exclude'] = TRUE;
  $handler->display->display_options['fields']['view_node']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['view_node']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['view_node']['alter']['link_class'] = 'use-cases--list-footer-link';
  $handler->display->display_options['fields']['view_node']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['view_node']['element_wrapper_class'] = 'use-cases--list-footer-link';
  $handler->display->display_options['fields']['view_node']['text'] = 'Læs mere';
  /* Field: Path (excluded) */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  $handler->display->display_options['fields']['path']['ui_name'] = 'Path (excluded)';
  $handler->display->display_options['fields']['path']['label'] = '';
  $handler->display->display_options['fields']['path']['exclude'] = TRUE;
  $handler->display->display_options['fields']['path']['alter']['text'] = '[path]';
  $handler->display->display_options['fields']['path']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['path']['element_default_classes'] = FALSE;
  /* Field: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['ui_name'] = 'Title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_wrapper_type'] = 'h3';
  $handler->display->display_options['fields']['title']['element_wrapper_class'] = 'use-cases--list-header';
  /* Field: Image */
  $handler->display->display_options['fields']['field_image_content']['id'] = 'field_image_content';
  $handler->display->display_options['fields']['field_image_content']['table'] = 'field_data_field_image_content';
  $handler->display->display_options['fields']['field_image_content']['field'] = 'field_image_content';
  $handler->display->display_options['fields']['field_image_content']['ui_name'] = 'Image';
  $handler->display->display_options['fields']['field_image_content']['label'] = '';
  $handler->display->display_options['fields']['field_image_content']['element_type'] = '0';
  $handler->display->display_options['fields']['field_image_content']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_image_content']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_image_content']['element_wrapper_class'] = 'use-cases--list-image';
  $handler->display->display_options['fields']['field_image_content']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_image_content']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_image_content']['settings'] = array(
    'image_style' => 'usecase_list',
    'image_link' => 'content',
  );
  $handler->display->display_options['fields']['field_image_content']['field_api_classes'] = TRUE;
  /* Field: Body */
  $handler->display->display_options['fields']['field_body']['id'] = 'field_body';
  $handler->display->display_options['fields']['field_body']['table'] = 'field_data_field_body';
  $handler->display->display_options['fields']['field_body']['field'] = 'field_body';
  $handler->display->display_options['fields']['field_body']['ui_name'] = 'Body';
  $handler->display->display_options['fields']['field_body']['label'] = '';
  $handler->display->display_options['fields']['field_body']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_body']['alter']['max_length'] = '100';
  $handler->display->display_options['fields']['field_body']['alter']['trim'] = TRUE;
  $handler->display->display_options['fields']['field_body']['element_type'] = '0';
  $handler->display->display_options['fields']['field_body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_body']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_body']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_body']['type'] = 'text_plain';
  /* Field: Comment count and link */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['ui_name'] = 'Comment count and link';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '[comment_count]
[view_node]';
  $handler->display->display_options['fields']['nothing']['element_type'] = '0';
  $handler->display->display_options['fields']['nothing']['element_label_type'] = '0';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['nothing']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['nothing']['element_wrapper_class'] = 'use-cases--list-footer';
  $handler->display->display_options['fields']['nothing']['element_default_classes'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Sort criterion: Content: Comment count */
  $handler->display->display_options['sorts']['comment_count']['id'] = 'comment_count';
  $handler->display->display_options['sorts']['comment_count']['table'] = 'node_comment_statistics';
  $handler->display->display_options['sorts']['comment_count']['field'] = 'comment_count';
  $handler->display->display_options['sorts']['comment_count']['order'] = 'DESC';
  $handler->display->display_options['sorts']['comment_count']['exposed'] = TRUE;
  $handler->display->display_options['sorts']['comment_count']['expose']['label'] = 'Kommentarantal';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created_1']['id'] = 'created_1';
  $handler->display->display_options['sorts']['created_1']['table'] = 'node';
  $handler->display->display_options['sorts']['created_1']['field'] = 'created';
  $handler->display->display_options['sorts']['created_1']['order'] = 'DESC';
  $handler->display->display_options['sorts']['created_1']['exposed'] = TRUE;
  $handler->display->display_options['sorts']['created_1']['expose']['label'] = 'Oprettelsesdato';
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
    'use_case' => 'use_case',
  );
  /* Filter criterion: Search: Search Terms */
  $handler->display->display_options['filters']['keys']['id'] = 'keys';
  $handler->display->display_options['filters']['keys']['table'] = 'search_index';
  $handler->display->display_options['filters']['keys']['field'] = 'keys';
  $handler->display->display_options['filters']['keys']['operator'] = 'required';
  $handler->display->display_options['filters']['keys']['exposed'] = TRUE;
  $handler->display->display_options['filters']['keys']['expose']['operator_id'] = 'keys_op';
  $handler->display->display_options['filters']['keys']['expose']['label'] = 'Search in use cases';
  $handler->display->display_options['filters']['keys']['expose']['operator'] = 'keys_op';
  $handler->display->display_options['filters']['keys']['expose']['identifier'] = 'keys';
  $handler->display->display_options['filters']['keys']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
    4 => 0,
    5 => 0,
  );

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'use-cases';
  $translatables['odaa_use_cases_list'] = array(
    t('Master'),
    t('Use cases'),
    t('mere'),
    t('Udfør'),
    t('Gendan'),
    t('Sortér efter'),
    t('Stigende'),
    t('Faldende'),
    t('Antal elementer'),
    t('- Alle -'),
    t('Forskydning'),
    t('« første'),
    t('‹ forrige'),
    t('næste ›'),
    t('sidste »'),
    t('Here you can find the user creations with data from Odaa. You can also join in and create your own use cases.'),
    t('<a href="[path]" class="use-cases--list-footer-link">[comment_count]</a>'),
    t('.'),
    t(' comments'),
    t('Læs mere'),
    t('[path]'),
    t('[comment_count]
[view_node]'),
    t('Kommentarantal'),
    t('Oprettelsesdato'),
    t('Search in use cases'),
    t('Page'),
    t('more'),
  );
  $export['odaa_use_cases_list'] = $view;

  return $export;
}
