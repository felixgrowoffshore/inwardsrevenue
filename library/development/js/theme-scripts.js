jQuery(document).ready(function($){

  // preparation for overriding the default select html tag
  $('select').niceSelect();

  $(".next-block").click(function() {
    $('html, body').animate({
      scrollTop: $("#next-block").offset().top
    }, 1000);
  });


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

	
