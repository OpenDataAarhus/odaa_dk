(function($) {
  var template;
  var hash;
  $(document).ready(function($) {
    if ($('.comments--wrapper').length) {
      // Find hash.
      hash = $('.comments--wrapper').attr('data');

      // Build template.
      var directive = {
        'li.comments--list-item': {
          'i<-data': {
            '.comments--list-author' : 'i.author',
            '.comments--list-posted' : 'i.date',
            '.comments--list-content p' : 'i.message',
            '.comment-delete a@href+' : '#{i.cid}/delete',
            '.comment-edit a@href+' : '#{i.cid}/edit',
            '.comments--list-item-actions@class+' : function(arg) {
              if (arg.item.owner === false) {
                return ' hide';
              }
            }
          }
        }
      };

      // Compile template.
      template = $('.comments--wrapper').compile(directive);

      // Remove template.
      $('.comments--list').empty();

      // Generate comments.
      generate_comments();

      // Update formular.
      update_comment_form();

      // Submit formular.
      $('.comments--post-comment form').live('submit', function(e) {
        e.preventDefault();
        add_comment();

        return false;
      });

      // Create actions links.
      set_comment_action_links();
    }
    else if ($('.dataset--list-wrapper').length) {
      $('li.dataset--list-item').each(function (id, item) {
        // Find hash
        var hash = $(item).attr('data-hash');
        $.getJSON('/odaa_comment/count/'+hash, function (data) {
          if (data.status) {
            var html = $(item).find('.dataset--list-footer-commentcount').html();
            html = html.replace('--', data.data.count);
            $(item).find('.dataset--list-footer-commentcount').html(html);
          }
        });
      });
    }
  });

  function add_comment() {
    var message = $('textarea').val().replace(/\n/g, '<br />').replace(/\s{2,}/g, ' ');
    var title = $('h1.page--title').html();
    var data = {
      'title' : title,
      'hash' : hash,
      'message' : message
    };

    $.ajax({
      type: 'POST',
      url: '/odaa_comment/add',
      data: data,
      success: function (data) {
        if (data.status) {
          // Comment added. Reset.
          $('textarea').val('');
          generate_comments(hash);
        }
      },
      dataType: "json"
    });
  }

  function generate_comments() {
    $.getJSON('/odaa_comment/view/'+hash, function(data) {
      if (data.status) {
        $('div.comments--wrapper').removeClass('comments--wrapper-empty');
        $('div.comments--wrapper').render(data, template);

        // Show comments
        $('.comments--list').show();
      }
      else {
        $('div.comments--wrapper').addClass('comments--wrapper-empty');
      }
    });
  }

  function update_comment_form() {
    $.getJSON('/odaa_comment/get_user', function (data) {
      if (data.status) {
        // Logged in user.
        $('.js-comment-username').html(data.account.name);
        $('.js-comment-mail').html(data.account.mail);
      }
      else {
        // No access, show login link and hide formular.
        $('.list--action-create').hide();
        $('.comments--post-comment-not-logged-in').show();
        $('.comments--post-comment-wrapper').hide();
      }
    });
  }

  function set_comment_action_links() {
    // Set variables.
    var commentInput = $('.comments--post-comment textarea');
    var commentInputValue = commentInput.val();

    // Add quote link to actions wrapper.
    $('.comments--list-quote')
    .live('click', function() {
      // Get content of comment.
      var commentQuoteContent = $(this)
      .parents('.js-comments-content')
      .find('.field-comment-body')
      .html();

      commentInput.val(commentInputValue + '<blockquote>' + commentQuoteContent + '</blockquote>\n');
    });
  }
})(jQuery);