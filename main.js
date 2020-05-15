$(document).ready(function(){

      $("#header-img-overlay").animate({'opacity':'0.3'}, 800);
      $("#header-logo-container").animate({'opacity':'1'}, 800);
      $("#header-year").animate({'opacity':'1'}, 1000);
      $("#row00, #row01, #row02").animate({'opacity': '1'}, 1000);

       var scroll_start = 1000;
       var startchange = $('#row00');
       var offset = startchange.offset();
       var fadedIn = false;
       $(document).scroll(function() {
          scroll_start = $(this).scrollTop();
          if(scroll_start > offset.top && !fadedIn) {
              $('.navbar-custom').css('background-color', 'rgba(255,25,25,0.7)');
           } else {
              $('.navbar-custom').css('background-color', 'transparent');
           }
       });

        var fadedIn = false;
        $(window).scroll(function() {
            if ($(window).scrollTop() > $('.top-container').outerHeight() && !fadedIn) {
              $('.focus-nav').first().animate({opacity: 1}, 'fast');
              $(".jump-top-container").animate({opacity: 1}, 'fast');
              fadedIn = true;
            } else if ($(window).scrollTop() < $('.top-container').outerHeight() && fadedIn) {
              $('.focus-nav').first().animate({opacity: 0}, 'fast');
              $(".jump-top-container").animate({opacity: 0}, 'fast');
              fadedIn = false;
            }
        });

        $(".person-card").click(function() {
          event.preventDefault();
          console.log("test");
          var thisPersonSelector  = "#person-" + $(this).data("number") + "-card";
          var thisDetailsSelector = "#person-" + $(this).data("number") + "-details";
          $(".story").not(thisDetailsSelector).slideUp(400);      //close other stories
          $(thisDetailsSelector).slideToggle(400);
        });

        $("#jump-top").click(function() {
            $('html, body').animate({
                scrollTop: $("#row00").offset().top - 55
            }, 400);
        });

        $(window).scroll( function(){


    $('.row').each( function(i){

        var bottom_of_object = $(this).offset().top + $(this).outerHeight()/5;
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        if( bottom_of_window > bottom_of_object ){

            $(this).animate({'opacity':'1'},500);

        }

    });

});

});
