jQuery(document).ready(function($){

  // preparation for overriding the default select html tag
  $('select').niceSelect();
  var element_position = $('#next-block').offset().top;
  $(".next-block").click(function() {
    $('html, body').animate({
      scrollTop: element_position
    }, 1000);
  });


  $(window).on('scroll', function() {
      var y_scroll_pos = window.pageYOffset;
      var scroll_pos_test = element_position - 200;

      if(y_scroll_pos > scroll_pos_test) {
          // console.log('colour-disabled');
          $("#masthead").removeClass('colour-disabled');
      } else {
        $("#masthead").addClass('colour-disabled');
      }
  });



//Client Page JS
 $(window).scroll(function(){
    $(".fade-1").css("opacity", 1 - $(window).scrollTop() / 500);
    $(".side-p1").css("opacity", 1 - $(window).scrollTop() / 500);
    $(".side-p1").animate({left:100, opacity:"show"}, 1000);
  });

  $(window).scroll(function(){
    $(".fade-2").css("opacity", 1 - $(window).scrollTop() / 1100);
    $(".side-p2").css("opacity", 1 - $(window).scrollTop() / 1100);
    $(".side-p2").animate({left:100, opacity:"show"}, 1500);
  });

  $(window).scroll(function(){
    $(".fade-3").css("opacity", 1 - $(window).scrollTop() / 1450);
    $(".side-p3").css("opacity", 1 - $(window).scrollTop() / 1450);
    $(".side-p3").animate({left:100, opacity:"show"}, 2000);
  });

  $(window).scroll(function(){
    $(".fade-4").css("opacity", 1 - $(window).scrollTop() / 1800);
    $(".side-p4").css("opacity", 1 - $(window).scrollTop() / 1800);
    $(".side-p4").animate({left:100, opacity:"show"}, 2500);
  });

  $(window).scroll(function(){
    $(".fade-5").css("opacity", 1 - $(window).scrollTop() / 6000);
    $(".side-p5").css("opacity", 1 - $(window).scrollTop() / 6000);
    $(".side-p5").animate({left:100, opacity:"show"}, 3000);
  });
   
});
