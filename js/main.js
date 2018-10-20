/*************************************************
                Animation During Scroll
**************************************************/
$(function () {

    //animate during scroll
    new WOW().init();
});
/******************************************
            ADD CLASS 
*******************************************/

$(window).scroll(function() {
  if($(this).scrollTop() > 200) 
  {
    $('.nav-transparent').addClass('nav-color');
    
  } else {
    $('.nav-transparent').removeClass('nav-color');
  }
});
/********************************************
            scroll down
*********************************************/
function scrollWin() {
    window.scrollBy(0,700);
}
$(".arrow-mark").click(function() {
    $('html,body').animate({
        scrollTop: $("#services").offset().top},
        'slow');
});