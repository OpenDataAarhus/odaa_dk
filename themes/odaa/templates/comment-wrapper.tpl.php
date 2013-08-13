<?php

/**
 * @file
 * Default theme implementation to provide an HTML container for comments.
 *
 * Available variables:
 * - $content: The array of content-related elements for the node. Use
 *   render($content) to print them all, or
 *   print a subset such as render($content['comment_form']).
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default value has the following:
 *   - comment-wrapper: The current template type, i.e., "theming hook".
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * The following variables are provided for contextual information.
 * - $node: Node object the comments are attached to.
 * The constants below the variables show the possible values and should be
 * used for comparison.
 * - $display_mode
 *   - COMMENT_MODE_FLAT
 *   - COMMENT_MODE_THREADED
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess_comment_wrapper()
 *
 * @ingroup themeable
 */
?>
<div id="comments" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if ($content['comments']): ?>
    <?php print render($title_prefix); ?>
    <h2 class="section-title"><?php print t('Comments and debate'); ?></h2>
    <p><?php print t('Join the debate! Remember to hold a proper tone as to maintain a constructive debate :)');?></p>
    <?php print render($title_suffix); ?>
  <?php endif; ?>
  <?php if ($content['comment_form']): ?>
    <div class="comments--list-actions">
      <a href="#postcomment" class="list--action-create"><i class="icon-comment-alt"></i>Skriv kommentar</a>
    </div>
  <?php endif; ?>
  <div class="comments--wrapper">
    <?php if(!empty($content['comments'])) :?>
      <ul class="comments--list">
        <?php print render($content['comments']); ?>
      </ul>
    <?php else : ?>
      <?php echo t('No comments yet, you can be the first!');?>
    <?php endif;?>
  </div>
  <?php if ($content['comment_form']): ?>
    <section id="postcomment" class="comments--post-comment-wrapper">
      <h2 class="comments--post-comment-header"><a name="postcomment"><?php echo('Post comment');?></a></h2>
      <div class="comments--post-comment">
        <?php print render($content['comment_form']); ?>
      </div>
    </section>
  <?php else: ?>
    <section id="postcomment" class="comments--post-comment-not-logged-in">
      <h2 class="comments--post-comment-header"><?php print t('Not logged in'); ?></h2>
        <p><?php print t('Please use the following link to login'); ?>: <a href="/user">Login</a></p>
    </section>    
  <?php endif; ?>
</div>




