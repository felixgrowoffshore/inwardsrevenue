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


  // get top positions and references to all blocks
var pos = $(".client-con").map(function(){
  var $this = $(this);
  return {
    el: $this,
    top: $this.offset().top
  };
}).get();

// var $result = $("#result-text");

// Set document scrolling event handler
$(document).on("scroll", function() {
  var visible = [];
  var scrollStart = $(this).scrollTop();
  var scrollEnd = scrollStart+$(window).height();
  var vis=[];
  clients_animate();
  for (var i=0, l=pos.length; i<l; i++) {
    if (pos[i].top < scrollStart || pos[i].top > scrollEnd) {
      // console.log(pos[i].el.attr("class") + "=> " + (pos[i].top > scrollEnd ? 'true' : 'end'));
      continue;
    }
    // console.log(pos[i].el.attr("class") + "=>" + pos[i].top);
    // vis.push(pos[i].el.attr("class"));
    pos[i].el.removeClass('fade-away');
  }
  // $result.text("");
  // $result.text(vis.join(", "));

}).scroll();

function clients_animate(){
  $(".client-con").addClass('fade-away');
}

//Client Page JS
 // $(window).scroll(function(){
 //    $(".fade-1").css("opacity", 1 - $(window).scrollTop() / 1000);
 //    $(".side-p1").css("opacity", 1 - $(window).scrollTop() / 1000);
 //    $(".side-p1").animate({left:100, opacity:"show"}, 1000);
 //  });
 //
 //  $(window).scroll(function(){
 //    $(".fade-2").css("opacity", 1 - $(window).scrollTop() / 1350);
 //    $(".side-p2").css("opacity", 1 - $(window).scrollTop() / 1350);
 //    $(".side-p2").animate({left:100, opacity:"show"}, 1500);
 //  });
 //
 //  $(window).scroll(function(){
 //    $(".fade-3").css("opacity", 1 - $(window).scrollTop() / 1700);
 //    $(".side-p3").css("opacity", 1 - $(window).scrollTop() / 1700);
 //    $(".side-p3").animate({left:100, opacity:"show"}, 2000);
 //  });
 //
 //  $(window).scroll(function(){
 //    $(".fade-4").css("opacity", 1 - $(window).scrollTop() / 2150);
 //    $(".side-p4").css("opacity", 1 - $(window).scrollTop() / 2150);
 //    $(".side-p4").animate({left:100, opacity:"show"}, 2500);
 //  });
 //
 //  $(window).scroll(function(){
 //    $(".fade-5").css("opacity", 1 - $(window).scrollTop() / 3000);
 //    $(".side-p5").css("opacity", 1 - $(window).scrollTop() / 3000);
 //    $(".side-p5").animate({left:100, opacity:"show"}, 3000);
 //  });

});
