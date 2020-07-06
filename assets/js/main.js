$(document).ready(function(){

  $('#preloader').fadeOut('slow',function(){
    $(this).remove();
  });
  $('#productos').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    pauseOnHover: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [
      {
        breakpoint: 960,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
       breakpoint: 768,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
       }
     }
   ]
  });
  $('#productos2').slick({
    slidesToShow: 4,
    rtl: true,
    slidesToScroll: 1,
    dots: false,
    pauseOnHover: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [
      {
        breakpoint: 960,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
       breakpoint: 768,
       settings: "unslick"
       }
   ]
  });
  $('#slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    fade: false,
    cssEase: 'linear',
    pauseOnHover: false,
    infinite: true,
    autoplay: true,
    speed: 500,
    autoplaySpeed: 3500
  });
  $('#galeria').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    fade: true,
    cssEase: 'linear',
    pauseOnHover: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5500
  });
});
