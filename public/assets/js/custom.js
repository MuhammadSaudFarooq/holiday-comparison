$(document).ready(function () {
   $("li:first-child").addClass("first");
   $("li:last-child").addClass("last");
   $('[href="#"]').attr("href", "javascript:;");
   $('.menu-Bar').click(function () {
      $(this).toggleClass('open');
      $('.menuWrap').toggleClass('open');
      $('body').toggleClass('ovr-hiddn');
   });

});

let str = location.href.toLowerCase();
$("ul.header-menu li a").each(function () {
   if (str.indexOf(this.href.toLowerCase()) > -1) {
      $("ul.header-menu  li.active_nav").removeClass("active_nav");
      $(this).parent().addClass("active_nav");
   }
});

let strFtr = location.href.toLowerCase();
$("ul.footer-menu li a").each(function () {
   if (strFtr.indexOf(this.href.toLowerCase()) > -1) {
      $("ul.footer-menu  li.active").removeClass("active");
      $(this).parent().addClass("active");
   }
});


$('.holiday_deal_slider').slick({
   infinite: true,
   slidesToShow: 2,
   slidesToScroll: 1,
   arrows: false,
   dots: true,
   paddingHorizontal: 0,
   responsive: [
      {
         breakpoint: 1280,
         settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            arrows: false,
            dots: true
         }
      },
      {
         breakpoint: 767,
         settings: {
            slidesToShow: 2,
            slidesToScroll: 2
         }
      },
      {
         breakpoint: 480,
         settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true
         }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
   ]

});

jQuery(function () {
   jQuery(".load-item-1").slice(0, 6).show();
   jQuery("#Load-More-1 a").on('click', function (e) {
      e.preventDefault();
      jQuery(".load-item-1:hidden").slice(0, 2).slideDown();
      if (jQuery(".load-item-1:hidden").length == 0) {
         jQuery("#Load-More-1 a").fadeOut('slow');
      }

   });
});


jQuery(function () {
   jQuery(".load-item-2").slice(0, 8).show();
   jQuery("#Load-More-2 a").on('click', function (e) {
      e.preventDefault();
      jQuery(".load-item-2:hidden").slice(0, 2).slideDown();
      if (jQuery(".load-item-2:hidden").length == 0) {
         jQuery("#Load-More-2 a").fadeOut('slow');
      }

   });
});


jQuery(document).ready(function () {
   jQuery('section.offer_detail_sec .inner-det .card_box h3').click(function () {
      jQuery(this).toggleClass('active'); // Add or remove 'active' class on h3 click
      jQuery(this).next('.checker_Detal').slideToggle(); // Toggle visibility of the next element with class 'checker_Detal'
   });
});