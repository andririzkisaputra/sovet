(function($) {
  "use strict";

  var varWindow = $(window);

  // Css Function Js
    const bgSelector = $("[data-bg-img]");
    bgSelector.each(function (index, elem) {
      let element = $(elem),
        bgSource = element.data('bg-img');
      element.css('background-image', 'url(' + bgSource + ')');
    });

  // Offcanvas Nav Js
    var $offCanvasNav = $('.mobile-menu-items'),
    $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu');
    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="mobile-menu-expand"></span>');
    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();
    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .mobile-menu-expand, li .menu-title', function(e) {
      var $this = $(this);
      if($this.parent().attr('class')){
          if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('mobile-menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
              $this.parent('li').removeClass('active-expand');
              $this.siblings('ul').slideUp();
            } else {
              $this.parent('li').addClass('active-expand');
              $this.closest('li').siblings('li').find('ul:visible').slideUp();
              $this.closest('li').siblings('li').removeClass('active-expand');
              $this.siblings('ul').slideDown();
            }
          }
        }
      });

      $( ".sub-menu" ).parent( "li" ).addClass( "menu-item-has-children" );

  // Menu Activeion Js
    var cururl = window.location.pathname;
    var curpage = cururl.substr(cururl.lastIndexOf('/') + 1);
    var hash = window.location.hash.substr(1);
    if((curpage === "" || curpage === "/" || curpage === "admin") && hash === "")
      {
      } else {
        $(".header-navigation li").each(function()
      {
        $(this).removeClass("active");
      });
      if(hash != "")
        $(".header-navigation li a[href='"+hash+"']").parents("li").addClass("active");
      else
      $(".header-navigation li a[href='"+curpage+"']").parents("li").addClass("active");
    }

  // Hero Slider JS
    var mainlSlider2 = new Swiper('.hero-slider-container', {
      slidesPerView : 1,
      slidesPerGroup: 1,
      loop: true,
      speed: 700,
      spaceBetween: 0,
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
    });

  // Testimonial Slider Js
    var TestimonialSlider = new Swiper('.testimonial-slider-container', {
      autoplay: false,
      slidesPerView : 2,
      slidesPerGroup: 1,
      spaceBetween: 4,
      speed: 500,
      pagination: {
        el: '.testimonial-swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1200: {
          slidesPerView : 2,
        },
        768: {
          slidesPerView : 2,
        },
        576: {
          slidesPerView : 1,
        },
        480: {
          slidesPerView : 1,
        },
        0: {
          slidesPerView : 1,
        },
      }
    });

  // Post Slider Js
    var swiper = new Swiper('.related-post-slider-container', {
      slidesPerGroup: 1,
      slidesPerView : 3,
      speed: 500,
      loop: true,
      spaceBetween: 60,
      navigation: {
        nextEl: '.related-post-swiper-btn-next',
        prevEl: '.related-post-swiper-btn-prev',
      },
      breakpoints: {
        1200: {
          slidesPerView : 3,
        },
        992: {
          slidesPerView : 3,
          spaceBetween: 30,
        },
        576: {
          slidesPerView : 2,
          spaceBetween: 30,
        },
        480: {
          slidesPerView : 1,
          spaceBetween: 30,
        },
        0: {
          slidesPerView : 1,
          spaceBetween: 30,
        },
      }
    });

  // Svg Inject Js
    SVGInject(document.querySelectorAll(".svg-inject"));

  // scrollToTop Js
    function scrollToTop() {
    var $scrollUp = $('#scroll-to-top'),
      $lastScrollTop = 0,
      $window = $(window);
      $window.on('scroll', function () {
      var st = $(this).scrollTop();
        if (st > $lastScrollTop) {
            $scrollUp.removeClass('show');
            $('.sticky-header').removeClass('sticky-show');
        } else {
          if ($window.scrollTop() > 250) {
            $scrollUp.addClass('show');
            $('.sticky-header').addClass('sticky-show');
          } else {
            $scrollUp.removeClass('show');
            $('.sticky-header').removeClass('sticky-show');
          }
        }
        $lastScrollTop = st;
    });
    $scrollUp.on('click', function (evt) {
      $('html, body').animate({scrollTop: 0}, 50);
      evt.preventDefault();
    });
  }
  scrollToTop();
  varWindow.on('scroll', function(){
    if($('.sticky-header').length){
      var windowpos = $(this).scrollTop();
      if (windowpos >= 250) {
        $('.sticky-header').addClass('sticky');
      } else {
        $('.sticky-header').removeClass('sticky');
      }
    }
  });

})(window.jQuery);
