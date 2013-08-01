<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>
<?php global $user;?>
<?php if(arg(0) == 'user' && is_numeric(arg(1))) :?>
  <?php $userpage_id = arg(1);?>
  <?php $userpage_obj  = user_load($userpage_id);?>
<?php endif;?>
<div class="user-profile--content-wrapper">
  <section class="user-profile--primary-content">
    <div class="user-profile--header-wrapper">
      <div class="user-profile--image"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=75&amp;d=identicon"></div>
      <h1 class="user-profile--title"><?php echo $userpage_obj->name;?></h1>
    </div>
    <section class="user-profile--info">
      <p><strong><?php echo t('Name');?>:</strong> <?php echo $userpage_obj->name;?></p>
      <p><strong><?php echo t('Email');?>:</strong> <?php echo $userpage_obj->mail;?></p>
      <p><strong><?php echo t('Member for');?>:</strong> <?php print render($user_profile['summary']['member_for']['#markup']); ?></p>
      <?php if($user->uid == $userpage_id) :?>
        <div class="user-profile--actions">
          <?php print l(t('Edit profile'), "user/{$user->uid}/edit", array('attributes' => array('class' => 'button'))); ?>
        </div>
      <?php endif;?>
    </section>
  </section>
</div>