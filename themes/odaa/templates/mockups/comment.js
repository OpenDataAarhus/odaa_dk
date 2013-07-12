(function($) {
  var template;
  var hash;
  $(document).ready(function($) {
    // Find hash.
    hash = $('.comment-wrapper').attr('id');
    
    // Build template.
    var directive = { 
      'div.comment': {
        'i<-data': {
          'div.cid' : 'i.cid',
          'div.author' : 'i.author',
          'div.date' : 'i.date',
          'div.subject' : 'i.subject'
        }
      }
    };

    // Compile template.
    template = $('.comment-wrapper').compile(directive);
    
    // Generate comments.
    generate_comments();
    
    // Submit formular.
    $('.new-comment form').live('submit', function(e) {
      e.preventDefault();
      add_comment();
      
      return false;
    });
    
    // Delete a comment.
    $('div.comment a.delete').live('click', function(e) {
      e.preventDefault();
      var cid = $(this).parent().find('.cid').html();
      delete_comment(cid);
      
      return false;
    });

  });

  function delete_comment(cid) {
    $.getJSON('/odaa_comment/delete/' + cid, function(data) {
      if (data.status) {
       $('div.cid').each(function(index, value) {
          if ($(value).html() === cid) {
            // remove div (comment)
            $(value).parent().empty();
          }
        });
      }
      else {
        alert('No access');
      }
    });
  }

  function add_comment() {
    var input = $('textarea').val();
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
        $('div.comment-wrapper').render(data, template);
      }
    });
  }
})(jQuery);