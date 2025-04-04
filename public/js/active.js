
 $('#counter-block').ready(function () {
   $('.hero-slider').owlCarousel({
       loop: true,
       margin: 20,
       nav: false,
       items: 1,
       autoplayTimeout: 3000,
       autoplay: true,
       dots: true,
       navText: [
      "<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>",
      "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
    //   responsive: {
    //      768: {
    //          items: 1,
    //      },
    //      500: {
    //          items: 1,
    //      },
    //      0: {
    //          items: 1,
    //      }
    //  },
   });
   

   $('.blog-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    items: 4,
    autoplayTimeout: 3000,
    autoplay: true,
    dots: true,
    navText: [
   "<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>",
   "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
   responsive: {
      768: {
          items: 4,
      },
      500: {
          items: 3,
      },
      0: {
          items: 1.5,
      }
  },
});

$('.service-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    items: 4,
    autoplayTimeout: 3000,
    autoplay: true,
    dots: true,
    navText: [
   "<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>",
   "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
   responsive: {
      768: {
          items: 4,
      },
      500: {
          items: 3,
      },
      0: {
          items: 1.5,
      }
  },
});


});


 $(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
        $('.header').addClass('navbar-sticky');
    } else {
        $('.header').removeClass('navbar-sticky');
    }
});