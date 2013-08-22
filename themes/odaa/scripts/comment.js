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
            '.comments--list-content' : 'i.subject',
            '.comment-delete a@href+' : 'i.cid',
            '.comment-edit a@href+' : 'i.cid',
            '.comments--list-item-actions@class+' : function(arg) {
              console.log(arg.item);
              if (arg.item.owner == false) {
                return 'hide';
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
    var input = $('textarea').val().replace(/\n/g, '<br>');
    var title = $('h1.page--title').html();
    $.getJSON('/odaa_comment/add/' + title + '/' + hash + '/' + input, function (data) {
      if (data.status) {
        // Comment added. Reset.
        $('textarea').val('');
        generate_comments(hash);
      }
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
})(jQuery);