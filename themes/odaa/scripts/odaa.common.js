(function($) {

  $(document).ready(function($) {
    /*
     * Comment actions links.
     */

    // Set variables.
    var commentsContent = $('.js-comments-content');

    if (commentsContent.length) {
      // Set variables.
      var commentInput = $('#edit-comment-body').find('textarea');
      var commentInputValue = commentInput.val();

      // Create actions wrapper.
      $('<div />', {
        'class' : 'comments--list-item-actions'
      })
      .appendTo(commentsContent);

      // Add quote link to actions wrapper.
      $('<a />', {
        'class' : 'comments--list-quote',
        'href' : Drupal.t('#postcomment'),
        'text' : Drupal.t('Quote')
      })
      .appendTo($('.comments--list-item-actions'))
      .prepend('<i class="icon-quote-left"></i>')
      .click(function() {
        // Get content of comment.
        var commentQuoteContent = $(this)
        .parents('.js-comments-content')
        .find('.field-comment-body')
        .html();

        commentInput.val(commentInputValue + '<blockquote>' + commentQuoteContent + '</blockquote>\n');
      });
    }
  });
})(jQuery);