jQuery(document).ready(function($){

  // preparation for overriding the default select html tag
  $('select').niceSelect();

  $(".next-block").click(function() {
    $('html, body').animate({
      scrollTop: $("#next-block").offset().top
    }, 1000);
  });

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

	
