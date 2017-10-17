jQuery(document).ready(function($){

  // preparation for overriding the default select html tag
  $('select').niceSelect();

  $(".next-block").click(function() {
    $('html, body').animate({
      scrollTop: $("#next-block").offset().top
    }, 1000);
  });

})
