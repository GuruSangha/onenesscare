
 $('#counter-block').ready(function () {
   $('.hero-slider').owlCarousel({
       loop: true,
       margin: 20,
       nav: false,
       items: 1,
       autoplayTimeout: 3000,
       autoplay: true,
       autoplayTimeout: 5000,
       autoplaySpeed: 1500,
       smartSpeed: 1500,
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
    items: 3.5,
    autoplayTimeout: 3000,
    autoplay: true,
    dots: false,
    navText: [
   "<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>",
   "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
   responsive: {
      768: {
          items: 3.5,
      },
      500: {
          items: 2,
      },
      0: {
          items: 1.5,
      }
  },
});


$('.team-slider').owlCarousel({
    loop: true,
    margin: 25,
    nav: false,
    items: 2.5,
    autoplayTimeout: 3000,
    autoplay: true,
    dots: false,
    navText: [
   "<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>",
   "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
   responsive: {
      768: {
          items: 2.5,
      },
      500: {
          items: 1.2,
      },
      0: {
          items: 1.2,
      }
  },
});
var owl = $(".team-slider");
owl.owlCarousel();
$(".next-btn").click(function () {
  owl.trigger("next.owl.carousel");
});
$(".prev-btn").click(function () {
  owl.trigger("prev.owl.carousel");
});
$(".prev-btn").addClass("disabled");
$(owl).on("translated.owl.carousel", function (event) {
  if ($(".owl-prev").hasClass("disabled")) {
    $(".prev-btn").addClass("disabled");
  } else {
    $(".prev-btn").removeClass("disabled");
  }
  if ($(".owl-next").hasClass("disabled")) {
    $(".next-btn").addClass("disabled");
  } else {
    $(".next-btn").removeClass("disabled");
  }
});

});


 $(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
        $('.header').addClass('navbar-sticky');
    } else {
        $('.header').removeClass('navbar-sticky');
    }
});