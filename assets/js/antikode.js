//navbar
var $nav = $('.navbar');
var winH = $(window).height();
$(window).scroll(function() {
  if ($(this).scrollTop() > winH ) {
    $nav.addClass("scroll-trigger fixed-top animated fadeInDown delayp1").removeClass("navbar-absolute-top fadeOutUp delayp1");
  } else {
    $nav.addClass("navbar-absolute-top animated fadeOutUp delayp1").removeClass("fixed-top scroll-trigger fadeInDown delayp1");
  }
});