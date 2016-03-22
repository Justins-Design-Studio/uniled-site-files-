 $(document).ready(function() {

  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 60) {
      $('nav').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < 61) {
      $('nav').removeClass('navbar-fixed');
    }
  });
});