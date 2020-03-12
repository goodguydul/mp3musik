jQuery(document).ready(function($) {
  var header_left_width = $('#header .site-info').width() + 80,
      header_right_width = $('#header .main-menu').width() + $('#header .social').width() + 40;

  $('nav.main-menu ul.sub-menu').each(function() {
    $(this).prev().after('<a href="javascript:;" class="toggle-sub-menu">+</a>');
  });

  $(window).resize(function() {
    if ( ( $('.container').width() - header_left_width ) <= header_right_width ) {
      $('#header').addClass('mobile');
    } else {
      $('#header').removeClass('mobile');
    }

    $('.section .items .item').each(function() {
      $(this).find('.button').show();
      $(this).find('.detail').css({ paddingRight: $(this).find('.button').outerWidth(true) + 20 });
    });
  });

  $(window).trigger('resize');

  $('#header .toggle-menu').click(function() {
    $('#header .right').toggleClass('show');
  });

  $('#header.mobile .main-menu li').on( 'click', 'a.toggle-sub-menu', function() {
    if ( $(this).hasClass('toggled') ) {
      $(this).removeClass('toggled');
      $(this).next().hide();
    } else {
      $(this).addClass('toggled');
      $(this).next().show();
    }
  });

  $('#search-result').on( 'click', '.btn-play', function() {
    if ( ! $(this).hasClass('btn-stop') && ! $(this).hasClass('disabled') ) {
      var btn = $(this),
          key = $(this).attr('data-key');

      $('.player').html('');
      $('.buttons .btn-play').removeClass('btn-stop disabled').text('Play');

      btn.addClass('disabled').text('Loading');

      $.post( idc.ajaxurl, { action: 'idc_load_mp3_player', key: key }, function(response) {
        $('#player-' + key).html(response);
        btn.removeClass('disabled').addClass('btn-stop').text('Stop');
      });
    } else if ( $(this).hasClass('btn-stop') ) {
      $('.buttons .btn-play').removeClass('btn-stop loading').text('Play');
      $('.player').html('');
    }
  });

  $('.more-results .btn').click(function() {
    var type = $(this).attr('data-type'),
        btn = $(this),
        action = '';

    if ( ! btn.hasClass( 'disabled' ) ) {
      btn.addClass('disabled').text('Please Wait ...');

      $.post( idc.ajaxurl, { action: 'idc_load_more_' + type + '_results', query: btn.attr('data-query'), page: btn.attr('data-page') }, function(response) {
        if ( response.result ) {
          $('#search-result .items').append(response.result);

          if ( response.limit_load ) {
            btn.text('Load More Results');
          } else {
            btn.removeClass('disabled').text('Load More Results');
            btn.attr('data-page',response.next_page);
          }
        } else {
          btn.text('Load More Results');
        }
      }, 'json' );
    }
  });

  $("#contact-form").on( "submit", function(event) {
		event.preventDefault();

    $('#contact-form .submit input').val('Please Wait ...');

    $.post( idc.ajaxurl, { action: 'idc_contact_form', data: $(this).serialize() }, function(response) {
      $('#response').empty();

      if (response.name) $('#response').append(response.name);
      if (response.email) $('#response').append(response.email);
      if (response.message) $('#response').append(response.message);

      if (response.success) {
        $('#contact-form input[type=text], #contact-form textarea').val('');
        $('#response').append(response.success);
      }

      $('#contact-form .submit input').val('Send Message');
    },'json' );
  });
});
