jQuery(function ($) {
    $('.hero').slick({
      autoplay: true,
      dots: true,
      infinite: true,
      speed: 800,
      slidesToShow: 1,
      fade: true,
      cssEase: 'linear',
      adaptiveHeight: true,
    });

    $(document).foundation();

    if (Foundation.MediaQuery.is('large')) {
      if ($('body').height() < $(window).height()) {
        $('.main').css('padding-bottom', $('.footer').height() + 'px');
        $('.footer').addClass('fixed');
      }
    }

    console.log($(window).height());
    console.log($('body').height());
});/*END JQUERY WRAPPER*/
