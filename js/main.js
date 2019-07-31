$(document).ready(function(){
  $('.slider__inner, .news__slider-inner').slick({
    nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
        prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
        // infinite: false,
        // autoplay:true,
  });

  $('.header__btn-menu').on('click', function(){
    $('.menu ul').slideToggle();
  });
});


// (function($){
//   $(function() {
//     $('.header__btn-menu').on('click', function() {
//       $(this).closest('.menu ul').toggleClass('menu_state_open');
//     });
//   });
// })
