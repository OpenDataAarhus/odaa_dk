<?php
/**
 * @file
 * 
 */
?>
<span class="spotbox--list-link"><?php print l($comment->subject, 'comment/' . $comment->cid, array('fragment' => 'comment-' . $comment->cid)); ?></span>
<p class="spotbox--list-posted"><?php print t('@time ago', array('@time' => format_interval(REQUEST_TIME - $comment->changed))); ?></p>
