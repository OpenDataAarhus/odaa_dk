(function($) {

  function set_comment_action_links() {
    /*
     * Comment actions links.
     */

    // Set variables.
    var commentsContent = $('.js-comments-content');

    if (commentsContent.length) {
      // Set variables.
      var commentInput = $('.comments--post-comment textarea');
      var commentInputValue = commentInput.val();

      // Add quote link to actions wrapper.
      $('<a />', {
        'class' : 'comments--list-quote',
        'href' : Drupal.t('#postcomment'),
        'text' : Drupal.t('Quote')
      })
      .prependTo($('.comments--list-item-actions'))
      .prepend('<i class="icon-quote-left"></i>')
      .click(function() {
        // Get content of comment.
        var commentQuoteContent = $(this)
        .parents('.js-comments-content')
        .find('.field-comment-body')
        .html();

        commentInput.val(commentInputValue + '<blockquote>' + commentQuoteContent + '</blockquote>\n');
      });

      // Add icons to links.
      var commentEditLink = $('.comments--list .comment-edit a');
      var commentDeleteLink = $('.comments--list .comment-delete a');

      if (commentEditLink.length) {
        commentEditLink.prepend('<i class="icon-edit"></i>');
      }

      if (commentDeleteLink.length) {
        commentDeleteLink.prepend('<i class="icon-remove-sign "></i>');
      }
    }
  }

  $(document).ready(function($) {
    set_comment_action_links($);
  });

})(jQuery);