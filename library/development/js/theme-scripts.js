jQuery(document).ready(function($){

  // preparation for overriding the default select html tag
  $('select').niceSelect();

  $(".next-block").click(function() {
    $('html, body').animate({
      scrollTop: $("#next-block").offset().top
    }, 1000);
  });

<<<<<<< HEAD

//Client Page JS
 $(window).scroll(function(){
    $(".fade-1").css("opacity", 1 - $(window).scrollTop() / 1000);
    $(".side-p1").css("opacity", 1 - $(window).scrollTop() / 1000);
    $(".side-p1").animate({left:100, opacity:"show"}, 1000);
  });

  $(window).scroll(function(){
    $(".fade-2").css("opacity", 1 - $(window).scrollTop() / 1350);
    $(".side-p2").css("opacity", 1 - $(window).scrollTop() / 1350);
    $(".side-p2").animate({left:100, opacity:"show"}, 1500);
  });

  $(window).scroll(function(){
    $(".fade-3").css("opacity", 1 - $(window).scrollTop() / 1700);
    $(".side-p3").css("opacity", 1 - $(window).scrollTop() / 1700);
    $(".side-p3").animate({left:100, opacity:"show"}, 2000);
  });

  $(window).scroll(function(){
    $(".fade-4").css("opacity", 1 - $(window).scrollTop() / 2150);
    $(".side-p4").css("opacity", 1 - $(window).scrollTop() / 2150);
    $(".side-p4").animate({left:100, opacity:"show"}, 2500);
  });

  $(window).scroll(function(){
    $(".fade-5").css("opacity", 1 - $(window).scrollTop() / 3000);
    $(".side-p5").css("opacity", 1 - $(window).scrollTop() / 3000);
    $(".side-p5").animate({left:100, opacity:"show"}, 3000);
  });


  });

	
=======
  // CLIENT PAGE
  $(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".fade-1").each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();

      /* If the element is completely within bounds of the window, fade it in */
      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        if ($(this).css("opacity")==1) {$(this).fadeTo(1800,0);}
      } else { //object goes out of view (scrolling up)
        if ($(this).css("opacity")==0) {$(this).fadeTo(2000,1);}
      }
    });
  }).scroll(); //invoke scroll-handler on page-load
});



})

// if(!isMobile) {
//         e.preventDefault();
//         scrollTop = $(this).attr('data-slide');
//         scrollTop(scrollTop);
//     }
>>>>>>> c6ccf5b1499d713cf5c743cf3866d309b8295177
