$(document).ready(function() {
    $(window).scroll(function() {
      $('.animated-item').each(function() {
        var position = $(this).offset().top;
        var scrollPosition = $(window).scrollTop();
        var windowHeight = $(window).height();
  
        if (position < scrollPosition + windowHeight - 100) {
          $(this).addClass('show');
        }
      });
    });
  });
  