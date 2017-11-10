jQuery(document).ready(function($){

  // preparation for overriding the default select html tag
  $('select').niceSelect();
  var element_position = $('#next-block').offset().top;
  $(".next-block").click(function() {
    $('html, body').animate({
      scrollTop: element_position
    }, 1000);
  });

  // get top positions and references to all blocks
  var pos = $(".client-con").map(function(){
    var $this = $(this);
    return {
      el: $this,
      top: $this.offset().top +100
    };
  }).get();
  var irc = $(".irc-con .animate-this .wrapper").map(function(){
    var $this = $(this);
    return {
      el: $this,
      top: $this.offset().top
    };
  }).get();
  var ndx_show = 0;
  $(".irc-con .animate-this .wrapper").remove();
  // Set document scrolling event handler
  var flag_scroll = true;
  var flag_show = false;
  var minus = 600;
  var add = 475;
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
   add = 2000;
  }
  // clients_animate();
  $(document).on("scroll", function() {
    var visible = [];
    var scrollStart = $(this).scrollTop();
    var scrollEnd = scrollStart+$(window).height();
    var vis=[];
    console.log(scrollStart);
    // if(scrollStart >= 5){
    //   $(".page-template-page-clients .page-content .client-con.trigger0").addClass('fade-away');
    // } else if (scrollStart >= 10) {
    //   $(".page-template-page-clients .page-content .client-con.trigger1").addClass('fade-away');
    // } else if(scrollStart >= 15) {
    //   for (var i=0, l=pos.length; i<l; i++) {
    //     if (pos[i].top < scrollStart || pos[i].top > scrollEnd) {
    //       continue;
    //     }
    //     pos[i].el.removeClass('fade-away');
    //   }
    // }
    if(scrollStart >= 25){
      for (var i=0, l=pos.length; i<l; i++) {
        if (pos[i].top < scrollStart || pos[i].top > scrollEnd) {
          continue;
        }
        pos[i].el.removeClass('fade-away');
      }
    } else if (scrollStart >= 15) {
      pos[1].el.removeClass('fade-away');
    } else if (scrollStart >= 10) {
      pos[0].el.removeClass('fade-away');
    }

    var scrollEnd2 = $(document).height();
    // client on scroll showing of slides
    // console.log(scrollStart + " : "+ irc[ndx_show].top);
    console.log("show : " + (scrollStart + add) + " > " + (scrollEnd2 - minus));
    if ((scrollStart + add) > (scrollEnd2 - minus)) {
      // console.log("show : " + irc[ndx_show].top + " > " + (scrollEnd2 - minus));
      flag_show = true;
    }
    if(irc[ndx_show] && flag_scroll && flag_show){
      flag_scroll = false;
      flag_show = false;
      // scrollEnd2 += irc[ndx_show].top;
      $(".irc-con .animate-this").append(irc[ndx_show].el);
      var current = $(".irc-con .animate-this > div:last-child");
      // console.log(current);
      // current.css("background","red");
      var counter = 0;
      var limit = 50;
      var addcss = setInterval(function(){
        counter++

        if(ndx_show%2 == 0){
          current.css("background","linear-gradient(50deg, #f3bce1 "+counter+"%, transparent "+counter+"%, transparent "+(100-counter)+"%, #ffccff 50%)");
        } else {
          current.css("background","linear-gradient(50deg, #ffccff "+counter+"%, transparent "+counter+"%, transparent "+(100-counter)+"%, #f3bce1 50%)");
        }
        if(counter == limit){
          clearInterval(addcss);
          flag_scroll = true;
          current.find("h2").addClass("active-show");
          current.find("p").addClass("active-show");
        }
      }, 10);

      ndx_show++;
    }
  }).scroll();

  $(window).on('scroll', function() {
      // flag_scroll = true;
      var y_scroll_pos = window.pageYOffset;
      var scroll_pos_test = element_position - 200;

      if(y_scroll_pos > scroll_pos_test) {
          $("#masthead").removeClass('colour-disabled');
      } else {
        $("#masthead").addClass('colour-disabled');
      }



  });

  // check num1 and num2
  var exists_form = false;
  try { a; b; exists_form = true;} catch(e) {}
  if(exists_form){
    $(".num1").text(a);
    $(".num2").text(b);

    var ans_c = a + b;

    // console.log(ans_c);
    $("#IRC-from form").submit(function(){
      var ans = $(".answer").val();
      var flag = true;
      if(ans_c != ans) flag = false;
      if(!flag) $(".wpcf7-validation-errors").append("Incorrect captcha");

      return flag;
    });

    $(".btn-submit").click(function(){
      var ans = $(".answer").val();
      var flag = true;
      if(ans_c != ans) flag = false;

      if(flag){
        $("#IRC-from form").trigger("submit");
      } else {
        $(".wpcf7-response-output").addClass("wpcf7-validation-errors").removeClass("wpcf7-mail-sent-ok wpcf7-display-none").html("Incorrect captcha");
      }
      // return flag;
    });
  }

  function clients_animate(){
    $(".client-con").addClass('fade-away');
  }


});
