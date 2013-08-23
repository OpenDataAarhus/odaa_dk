<?php
/**
 * @file
 * odaa_heartbeat.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function odaa_heartbeat_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'heartbeat_custom_view';
  $view->description = 'Basic heartbeat activity streams in fields mode';
  $view->tag = 'default';
  $view->base_table = 'heartbeat_activity';
  $view->human_name = 'Heartbeat custom view';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['use_more_text'] = 'mere';
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['access']['perm'] = 'access user profiles';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['exposed_form']['options']['submit_button'] = 'Udfør';
  $handler->display->display_options['exposed_form']['options']['reset_button_label'] = 'Gendan';
  $handler->display->display_options['exposed_form']['options']['exposed_sorts_label'] = 'Sortér efter';
  $handler->display->display_options['exposed_form']['options']['sort_asc_label'] = 'Stigende';
  $handler->display->display_options['exposed_form']['options']['sort_desc_label'] = 'Faldende';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['pager']['options']['expose']['items_per_page_label'] = 'Antal elementer';
  $handler->display->display_options['pager']['options']['expose']['items_per_page_options_all_label'] = '- Alle -';
  $handler->display->display_options['pager']['options']['expose']['offset_label'] = 'Forskydning';
  $handler->display->display_options['pager']['options']['tags']['first'] = '« første';
  $handler->display->display_options['pager']['options']['tags']['previous'] = '‹ forrige';
  $handler->display->display_options['pager']['options']['tags']['next'] = 'næste ›';
  $handler->display->display_options['pager']['options']['tags']['last'] = 'sidste »';
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['style_options']['row_class'] = 'spotbox--list-item';
  $handler->display->display_options['style_options']['class'] = 'spotbox--list';
  $handler->display->display_options['style_options']['wrapper_class'] = '';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Forbindelse: Heartbeat activity: Node target ID */
  $handler->display->display_options['relationships']['nid_target']['id'] = 'nid_target';
  $handler->display->display_options['relationships']['nid_target']['table'] = 'heartbeat_activity';
  $handler->display->display_options['relationships']['nid_target']['field'] = 'nid_target';
  $handler->display->display_options['relationships']['nid_target']['label'] = 'indhold';
  /* Felt: excluded type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  $handler->display->display_options['fields']['type']['relationship'] = 'nid_target';
  $handler->display->display_options['fields']['type']['ui_name'] = 'excluded type';
  $handler->display->display_options['fields']['type']['label'] = 'Nyt ';
  $handler->display->display_options['fields']['type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['type']['element_type'] = 'span';
  $handler->display->display_options['fields']['type']['element_label_type'] = 'span';
  $handler->display->display_options['fields']['type']['element_label_colon'] = FALSE;
  /* Felt: excluded title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['relationship'] = 'nid_target';
  $handler->display->display_options['fields']['title']['ui_name'] = 'excluded title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Felt: excluded activity message */
  $handler->display->display_options['fields']['message']['id'] = 'message';
  $handler->display->display_options['fields']['message']['table'] = 'heartbeat_activity';
  $handler->display->display_options['fields']['message']['field'] = 'message';
  $handler->display->display_options['fields']['message']['ui_name'] = 'excluded activity message';
  $handler->display->display_options['fields']['message']['label'] = '';
  $handler->display->display_options['fields']['message']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['message']['hide_alter_empty'] = FALSE;
  /* Felt: Type+title */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['ui_name'] = 'Type+title';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '[type]: [title]';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  /* Felt: Heartbeat activity: Oprettelsesdato */
  $handler->display->display_options['fields']['created_at']['id'] = 'created_at';
  $handler->display->display_options['fields']['created_at']['table'] = 'heartbeat_activity';
  $handler->display->display_options['fields']['created_at']['field'] = 'created_at';
  $handler->display->display_options['fields']['created_at']['label'] = '';
  $handler->display->display_options['fields']['created_at']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['created_at']['hide_alter_empty'] = FALSE;
  $handler->display->display_options['fields']['created_at']['date_format'] = 'time ago';
  /* Sorteringskriterie: Heartbeat activity: Oprettelsesdato */
  $handler->display->display_options['sorts']['created_at']['id'] = 'created_at';
  $handler->display->display_options['sorts']['created_at']['table'] = 'heartbeat_activity';
  $handler->display->display_options['sorts']['created_at']['field'] = 'created_at';
  $handler->display->display_options['sorts']['created_at']['order'] = 'DESC';
  /* Kontekstuelt filter: Heartbeat activity: Bruger ID */
  $handler->display->display_options['arguments']['uid']['id'] = 'uid';
  $handler->display->display_options['arguments']['uid']['table'] = 'heartbeat_activity';
  $handler->display->display_options['arguments']['uid']['field'] = 'uid';
  $handler->display->display_options['arguments']['uid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['uid']['exception']['title'] = 'Alle';
  $handler->display->display_options['arguments']['uid']['default_argument_type'] = 'user';
  $handler->display->display_options['arguments']['uid']['default_argument_options']['user'] = FALSE;
  $handler->display->display_options['arguments']['uid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['uid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['uid']['summary_options']['items_per_page'] = '25';
  /* Filterkriterie: Heartbeat activity: Heartbeat template */
  $handler->display->display_options['filters']['message_id']['id'] = 'message_id';
  $handler->display->display_options['filters']['message_id']['table'] = 'heartbeat_activity';
  $handler->display->display_options['filters']['message_id']['field'] = 'message_id';
  $handler->display->display_options['filters']['message_id']['value'] = array(
    'heartbeat_add_node' => 'heartbeat_add_node',
    'heartbeat_edit_account' => 'heartbeat_edit_account',
  );

  /* Display: Feed */
  $handler = $view->new_display('feed', 'Feed', 'feed');
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['style_plugin'] = 'rss';
  $handler->display->display_options['row_plugin'] = 'heartbeat_activity_rss';
  $handler->display->display_options['path'] = 'heartbeat-activity.xml';
  $handler->display->display_options['displays'] = array(
    'default' => 'default',
    'page' => 'page',
  );

  /* Display: User activity */
  $handler = $view->new_display('block', 'User activity', 'block');
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['pager']['options']['expose']['items_per_page_label'] = 'Antal elementer';
  $handler->display->display_options['pager']['options']['expose']['items_per_page_options_all_label'] = '- Alle -';
  $handler->display->display_options['pager']['options']['expose']['offset_label'] = 'Forskydning';
  $handler->display->display_options['pager']['options']['tags']['first'] = '« første';
  $handler->display->display_options['pager']['options']['tags']['previous'] = '‹ forrige';
  $handler->display->display_options['pager']['options']['tags']['next'] = 'næste ›';
  $handler->display->display_options['pager']['options']['tags']['last'] = 'sidste »';
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Overskrift: Global: Tekstområde */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['empty'] = TRUE;
  $handler->display->display_options['header']['area']['content'] = 'Brugeraktivitet';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Felt: Heartbeat activity: Activity message */
  $handler->display->display_options['fields']['message']['id'] = 'message';
  $handler->display->display_options['fields']['message']['table'] = 'heartbeat_activity';
  $handler->display->display_options['fields']['message']['field'] = 'message';
  $handler->display->display_options['fields']['message']['label'] = '';
  $handler->display->display_options['fields']['message']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['message']['element_wrapper_type'] = 'span';
  $handler->display->display_options['fields']['message']['element_wrapper_class'] = 'spotbox--list-link';
  /* Felt: Heartbeat activity: Oprettelsesdato */
  $handler->display->display_options['fields']['created_at']['id'] = 'created_at';
  $handler->display->display_options['fields']['created_at']['table'] = 'heartbeat_activity';
  $handler->display->display_options['fields']['created_at']['field'] = 'created_at';
  $handler->display->display_options['fields']['created_at']['label'] = '';
  $handler->display->display_options['fields']['created_at']['alter']['strip_tags'] = TRUE;
  $handler->display->display_options['fields']['created_at']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['created_at']['element_wrapper_type'] = 'p';
  $handler->display->display_options['fields']['created_at']['element_wrapper_class'] = 'spotbox--list-posted';
  $handler->display->display_options['fields']['created_at']['hide_alter_empty'] = FALSE;
  $handler->display->display_options['fields']['created_at']['date_format'] = 'time ago';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filterkriterie: Heartbeat activity: Heartbeat template */
  $handler->display->display_options['filters']['message_id']['id'] = 'message_id';
  $handler->display->display_options['filters']['message_id']['table'] = 'heartbeat_activity';
  $handler->display->display_options['filters']['message_id']['field'] = 'message_id';
  $handler->display->display_options['filters']['message_id']['value'] = array(
    'heartbeat_tweet' => 'heartbeat_tweet',
    'heartbeat_add_node' => 'heartbeat_add_node',
    'heartbeat_edit_account' => 'heartbeat_edit_account',
  );

  /* Display: Node activity */
  $handler = $view->new_display('block', 'Node activity', 'block_1');
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Overskrift: Global: Tekstområde */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = 'Node activity';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Felt: Heartbeat activity: Activity message */
  $handler->display->display_options['fields']['message']['id'] = 'message';
  $handler->display->display_options['fields']['message']['table'] = 'heartbeat_activity';
  $handler->display->display_options['fields']['message']['field'] = 'message';
  $handler->display->display_options['fields']['message']['label'] = '';
  $handler->display->display_options['fields']['message']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['message']['element_wrapper_class'] = 'spotbox--list-link';
  /* Felt: Heartbeat activity: Oprettelsesdato */
  $handler->display->display_options['fields']['created_at']['id'] = 'created_at';
  $handler->display->display_options['fields']['created_at']['table'] = 'heartbeat_activity';
  $handler->display->display_options['fields']['created_at']['field'] = 'created_at';
  $handler->display->display_options['fields']['created_at']['label'] = '';
  $handler->display->display_options['fields']['created_at']['alter']['strip_tags'] = TRUE;
  $handler->display->display_options['fields']['created_at']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['created_at']['element_wrapper_type'] = 'p';
  $handler->display->display_options['fields']['created_at']['element_wrapper_class'] = 'spotbox--list-posted';
  $handler->display->display_options['fields']['created_at']['hide_alter_empty'] = FALSE;
  $handler->display->display_options['fields']['created_at']['date_format'] = 'time ago';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filterkriterie: Heartbeat activity: Heartbeat template */
  $handler->display->display_options['filters']['message_id']['id'] = 'message_id';
  $handler->display->display_options['filters']['message_id']['table'] = 'heartbeat_activity';
  $handler->display->display_options['filters']['message_id']['field'] = 'message_id';
  $handler->display->display_options['filters']['message_id']['value'] = array(
    'heartbeat_edit_node' => 'heartbeat_edit_node',
    'heartbeat_add_comment' => 'heartbeat_add_comment',
  );
  $translatables['heartbeat_custom_view'] = array(
    t('Master'),
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
    t('indhold'),
    t('Nyt '),
    t('[type]: [title]'),
    t('Alle'),
    t('Feed'),
    t('User activity'),
    t('Brugeraktivitet'),
    t('Node activity'),
  );
  $export['heartbeat_custom_view'] = $view;

  return $export;
}
