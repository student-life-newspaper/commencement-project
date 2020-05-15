$(document).ready(function(){

      $("#header-img-overlay").animate({'opacity':'0.4'}, 800);
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
              //fadedIn=true;
           } else {
              $('.navbar-custom').css('background-color', 'transparent');
              //fadedIn=false;
           }
       });

        var fadedIn = false;
        $(window).scroll(function() {
          // console.log("ScrollTop: " + $(window).scrollTop());
          // console.log("Height: " +  $('.top-container').outerHeight());
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
          var thisArrowSelector   = "#person-" + $(this).data("number") + "-card > .selection-marker";
          $(".story").not(thisDetailsSelector).slideUp(400);      //close other stories
          $(thisArrowSelector).fadeToggle();
          if($(thisDetailsSelector).is(":hidden")){                  //only scroll to top if story is closed
              if($(".story").is(":visible")){
                $("#person-" + $(".story:visible").data("number") + "-card > .selection-marker").fadeOut();
                if($(".story:visible").data("number") < $(this).data("number")){                    //fixes where position to scroll is pulled before story above has closed fully, this scrolling to middle of story to be opened
                  $('html, body').animate({
                      scrollTop: $(this).offset().top - 55 - $(".story:visible").outerHeight(true)
                  }, 400);
                }else{
                  $('html, body').animate({
                      scrollTop: $(this).offset().top - 55
                  }, 400);
                }
              }else{
                $('html, body').animate({
                    scrollTop: $(this).offset().top - 55
                }, 400);
              }
          }
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
