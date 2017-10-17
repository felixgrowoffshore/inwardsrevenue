jQuery(document).ready(function($){

  // preparation for overriding the default select html tag
  $('select').niceSelect();

  $(".next-block").click(function() {
    $('html, body').animate({
      scrollTop: $("#next-block").offset().top
    }, 1000);
  });

  // var checkboxs = $('input[type=checkbox]');
  //
  // checkboxs.each(function(){
  //   $(this).wrap('<div class="customCheckbox"></div>');
  //   $(this).before('<span>&#10004;</span>');
  // });
  //
  // checkboxs.change(function(){
  //   if($(this).is(':checked')){
  //    $(this).parent().addClass('customCheckboxChecked');
  //   } else {
  //    $(this).parent().removeClass('customCheckboxChecked');
  //   }
  // });

})
