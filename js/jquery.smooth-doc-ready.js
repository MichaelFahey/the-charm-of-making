jQuery(document).ready(function() {

      jQuery('body').smoothScroll({
        delegateSelector: 'ul.mainnav a'
      });

      jQuery('p.subnav a').click(function(event) {
        event.preventDefault();
        var link = this;
        jQuery.smoothScroll({
          scrollTarget: link.hash
        });
      });

      jQuery('#change-speed').bind('click', function() {
        var $p1 = $('ul.mainnav a').first();
        var p1Opts = $p1.smoothScroll('options') || {};

        p1Opts.speed = p1Opts.speed === 1400 ? 400 : 1400;
        $p1.smoothScroll('options', p1Opts);
      });

      jQuery('button.scrollsomething').bind('click', function(event) {
        event.preventDefault();
        jQuery.smoothScroll({
          scrollElement: jQuery('div.scrollme'),
          scrollTarget: '#findme'
        });
      });
      jQuery('button.scrollhorz').bind('click', function(event) {
        event.preventDefault();
        jQuery.smoothScroll({
          direction: 'left',
          scrollElement: jQuery('div.scrollme'),
          scrollTarget: '.horiz'
        });

      });

      jQuery('#scroll-relative-plus').on('click', function() {
        jQuery.smoothScroll({
          afterScroll: function() {
            console.log('hello!')
          }
        }, '+=100px');
      });
      jQuery('#scroll-relative-minus').on('click', function() {
        jQuery.smoothScroll('-=100px');
      });
      jQuery('.page-scroll').on('click', function() {
        var wHeight = jQuery(window).height();
        var wWidth = jQuery(window).width();
        var rel = jQuery(this).hasClass('down') ? '+=' : '-=';

        if (wWidth <= 560) {
          wHeight -= 130;
        }

        jQuery.smoothScroll(rel + wHeight);
      });
    });
