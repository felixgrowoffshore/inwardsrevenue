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
  var ndx_show = irc.length-1;
  $(".irc-con .animate-this .wrapper").remove();
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
      // right = pos[i].el.css('right').replace(/[^-\d\.]/g, '');
      // pos[i].el.css('right',right + 1 + "px");
    }
    // for (var i=irc.length-1; i >= 0 ; i--) {
    //   if (irc[i].top < scrollStart || irc[i].top > scrollEnd) {
    //     continue;
    //   }
    //   // $(".irc-con").prepend(irc[i].el);
    //
    //   var ava = irc_block[i].top - element_position + 200;
    //   if(ava > 0){
    //     var percent = (scrollStart / ava * 100) / 2 + 50;
    //     var percent_ = ((scrollStart / ava * 100) / 2 - 50) * -1.0;
    //     if(percent >= 75 ){
    //       if(i%2 == 0){
    //         irc_block[i].el.add;
    //       } else {
    //         irc_block[i].el.css("background","linear-gradient(50deg, #f3bce1 "+percent_+"%, transparent "+percent_+"%, transparent "+percent+"%, #ffccff 50%)");
    //       }
    //     }
    //
    //   }
    // }

  }).scroll();
  var flag_scroll = true;
  $(window).on('scroll', function() {
      // flag_scroll = true;
      var y_scroll_pos = window.pageYOffset;
      var scroll_pos_test = element_position - 200;

      if(y_scroll_pos > scroll_pos_test) {
          // console.log('colour-disabled');
          $("#masthead").removeClass('colour-disabled');
      } else {
        $("#masthead").addClass('colour-disabled');
      }

      // client on scroll showing of slides
      // console.log("show index" + ndx_show);
      if(irc[ndx_show] && flag_scroll){
        flag_scroll = false;
        $(".irc-con .animate-this").prepend(irc[ndx_show].el);
        var current = $(".irc-con .animate-this > div:first-child");
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

        ndx_show--;
      }

  });

  // check num1 and num2

  if(a && b){
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
