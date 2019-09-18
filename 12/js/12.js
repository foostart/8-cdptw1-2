$(document).ready(function(){
   var swiper = new Swiper('.swiper-container', {
    // direction: 'vertical',
    // loop: true,
      effect: 'cube',
      grabCursor: true,
      cubeEffect: {
        shadow: false,
        slideShadows: false,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      // scrollbar: {
      //   el: '.swiper-scrollbar',
      // },
    });
});