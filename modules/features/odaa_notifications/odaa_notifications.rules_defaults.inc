<?php
/**
 * @file
 * odaa_notifications.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function odaa_notifications_default_rules_configuration() {
  $items = array();
  $items['rules_notify_on_new_comments'] = entity_import('rules_config', '{ "rules_notify_on_new_comments" : {
      "LABEL" : "Notify on new comments",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "flag", "rules", "comment" ],
      "ON" : { "comment_insert--comment_node_forum_topic" : { "bundle" : "comment_node_forum_topic" } },
      "DO" : [
        { "flag_fetch_users_node" : {
            "USING" : { "flag" : "follow", "node" : [ "comment:node" ] },
            "PROVIDE" : { "users" : { "users" : "Users who flagged" } }
          }
        },
        { "LOOP" : {
            "USING" : { "list" : [ "users" ] },
            "ITEM" : { "list_item" : "Current list item" },
            "DO" : [
              { "component_rules_send_mail_to_subscribers" : {
                  "node" : [ "comment:node" ],
                  "user" : [ "list-item" ],
                  "comment" : [ "comment" ]
                }
              }
            ]
          }
        }
      ]
    }
  }');
  $items['rules_send_mail_to_subscribers'] = entity_import('rules_config', '{ "rules_send_mail_to_subscribers" : {
      "LABEL" : "Send mail to subscribers",
      "PLUGIN" : "rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "rules", "mimemail" ],
      "USES VARIABLES" : {
        "node" : { "label" : "Node", "type" : "node" },
        "user" : { "label" : "User", "type" : "user" },
        "comment" : { "label" : "Comment", "type" : "comment" }
      },
      "IF" : [
        { "NOT data_is" : { "data" : [ "user:uid" ], "value" : [ "comment:author:uid" ] } }
      ],
      "DO" : [
        { "mimemail" : {
            "key" : "loop-notification",
            "to" : "[user:mail]",
            "from_mail" : "[site:mail]",
            "subject" : "Ny kommentar til: [node:title]",
            "body" : "\\u003Cp\\u003EHej,\\u003C\\/p\\u003E\\r\\n\\u003Cp\\u003EDer er kommet en ny kommentar til \\u003Ca href=\\u0022\\/node\\/[node:nid]\\u0022\\u003E[node:title]\\u003C\\/a\\u003E\\u003C\\/p\\u003E\\r\\n\\u003Cp\\u003EMed venlig hilsen\\u003C\\/p\\u003E\\r\\n\\u003Cp\\u003E[site:name]\\u003C\\/p\\u003E\\r\\n\\u003C\\/br\\u003E\\r\\n\\u003C\\/br\\u003E\\r\\n\\u003Cp\\u003EDette er en automatisk meddelelse fra [site:name]\\u003C\\/p\\u003E",
            "language" : [ "" ]
          }
        }
      ]
    }
  }');
  return $items;
}
