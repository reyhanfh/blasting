(function ($) {
  "use strict";
  var nav_offset_top = $(".header_area").height() + 50;

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Header carousel
  $(".header-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    items: 1,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>',
    ],
  });

  // Special Offer Caorusel
  $(".special-offer").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    items: 4,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>',
    ],

    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 2,
      },
      767: {
        items: 2,
      },
      992: {
        items: 3,
      },
      1200: {
        items: 5,
      },
    },
  });

  $(".special-offer1").owlCarousel({
    loop: true,
    margin: 20,
    items: 3,
    nav: false,
    dots: false,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 2500,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 3,
      },
    },
  });

  $(".popular-hotel").owlCarousel({
    loop: true,
    margin: 20,
    items: 3,
    nav: false,
    dots: false,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 2500,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 3,
      },
    },
  });

  $(".popular-hotels").owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    dots: true,
    nav: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 10,
        stagePadding: 20,
      },
      600: {
        items: 1,
        margin: 20,
        stagePadding: 50,
      },
      1000: {
        items: 3,
      },
    },
  });

  const scrollTop = document.querySelector(".scroll-top");
  if (scrollTop) {
    const togglescrollTop = function () {
      window.scrollY > 100
        ? scrollTop.classList.add("active")
        : scrollTop.classList.remove("active");
    };
    window.addEventListener("load", togglescrollTop);
    document.addEventListener("scroll", togglescrollTop);
    scrollTop.addEventListener(
      "click",
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      })
    );
  }

  new WOW().init();

  $(".slider").owlCarousel({
    loop: true,
    autoplay: true,
    dots: true,
    nav: true,
    autoplayTimeout: 2000, //2000ms = 2s;
    autoplayHoverPause: true,
  });

  $(document).ready(function () {
    $("#room-hotel").owlCarousel({
      loop: true,
      navigation: true, // Show next and prev buttons
      autoplay: true,
      slideSpeed: 300,
      paginationSpeed: 400,

      items: 1,
      itemsDesktop: false,
      itemsDesktopSmall: false,
      itemsTablet: false,
      itemsMobile: false,
    });

    $("#room-hotel1").owlCarousel({
      loop: true,
      navigation: true, // Show next and prev buttons
      autoplay: true,
      slideSpeed: 300,
      paginationSpeed: 400,

      items: 1,
      itemsDesktop: false,
      itemsDesktopSmall: false,
      itemsTablet: false,
      itemsMobile: false,
    });
    $("#room-hotel2").owlCarousel({
      loop: true,
      navigation: true, // Show next and prev buttons
      autoplay: true,
      slideSpeed: 300,
      paginationSpeed: 400,

      items: 1,
      itemsDesktop: false,
      itemsDesktopSmall: false,
      itemsTablet: false,
      itemsMobile: false,
    });
    $("#room-hotel3").owlCarousel({
      loop: true,
      navigation: true, // Show next and prev buttons
      autoplay: true,
      slideSpeed: 300,
      paginationSpeed: 400,

      items: 1,
      itemsDesktop: false,
      itemsDesktopSmall: false,
      itemsTablet: false,
      itemsMobile: false,
    });
    $("#room-hotel4").owlCarousel({
      loop: true,
      navigation: true, // Show next and prev buttons
      autoplay: true,
      slideSpeed: 300,
      paginationSpeed: 400,

      items: 1,
      itemsDesktop: false,
      itemsDesktopSmall: false,
      itemsTablet: false,
      itemsMobile: false,
    });
    $("#room-hotel5").owlCarousel({
      loop: true,
      navigation: true, // Show next and prev buttons
      autoplay: true,
      slideSpeed: 300,
      paginationSpeed: 400,

      items: 1,
      itemsDesktop: false,
      itemsDesktopSmall: false,
      itemsTablet: false,
      itemsMobile: false,
    });
  });

  //   Logo Group
  $(".logo-group").owlCarousel({
    items: 4,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    nav: false,
    dots: false,
    navText: [
      "<i class='fa fa-chevron-left'></i>",
      "<i class='fa fa-chevron-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
  //   End logo group

  //   banner-rebranding

  $(document).ready(function () {
    $("body").scrollspy({
      target: "#myScrollspy",
    });
  });

  const navbar = document.getElementsByTagName("nav")[0];
  window.addEventListener("scroll", function () {
    console.log(window.scrollY);
    if (window.scrollY > 1) {
      navbar.classList.replace("bg-transparent", "nav-color");
    } else if (this.window.scrollY <= 0) {
      navbar.classList.replace("nav-color", "bg-transparent");
    }
  });

  $(document).ready(function () {
    $('input[name="daterange"]').daterangepicker();
  });

  // owl-carousel customisation
  $(document).ready(function () {
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      autoplay: true,
      dots: true,
      // nav: true
    });
  });

  jQuery(".slider-hotels").owlCarousel({
    // items: 2,
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 2,
      },
    },
  });

  jQuery(".slider-facility").owlCarousel({
    // items: 3,
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 2,
      },
    },
  });
})(jQuery);
