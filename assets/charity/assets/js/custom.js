(function($) {
  
  "use strict";

  // Preloader
  function stylePreloader() {
    $('body').addClass('preloader-deactive');
  }

  // Background Image
  $('[data-bg-img]').each(function() {
    $(this).css('background-image', 'url(' + $(this).data("bg-img") + ')');
  });
  // Background Color
  $('[data-bg-color]').each(function() {
    $(this).css('background-color', $(this).data("bg-color"));
  });

  // Donate Form Input Active JS
  $(".donate-form .amount-info .donate-amount, .donation-form .amount-info .donate-amount, .widget-causes-item .amount-info .donate-amount").on('click', function() {
    $(".donate-amount").removeClass('active');
    $(this).addClass('active');
  });

  // Off Canvas JS
  var canvasWrapper = $(".off-canvas-wrapper");
  $(".btn-menu").on('click', function() {
    canvasWrapper.addClass('active');
    $("body").addClass('fix');
  });

  $(".close-action > .btn-close, .off-canvas-overlay").on('click', function() {
    canvasWrapper.removeClass('active');
    $("body").removeClass('fix');
  });

  //Responsive Slicknav JS
  $('.main-menu').slicknav({
    appendTo: '.res-mobile-menu',
    closeOnClick: true,
    removeClasses: true,
    closedSymbol: '<i class="icon_plus"></i>',
    openedSymbol: '<i class="icon_minus-06"></i>'
  });

  // Swipper JS
  var testimonialSlider = new Swiper('.testimonial-slider-container', {
    slidesPerView : 1,
    speed: 1000,
    loop: true,
    spaceBetween : 30,
    autoplay: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  var teamSlider = new Swiper('.team-slider-container', {
    slidesPerView: 3,
    loop: true,
    spaceBetween : 30,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      1200:{
          slidesPerView : 3
      },

      992:{
          slidesPerView : 3
      },

      768:{
          slidesPerView : 2

      },

      576:{
          slidesPerView : 2
      },

      0:{
          slidesPerView : 1
      }
    }
  });

  // Progress Bar JS
  var skillsBar = $(".progress-bar-line");
  skillsBar.appear(function() {
    skillsBar.each(function(index, elem) {
      var elementItem = $(elem),
      skillBarAmount = elementItem.data('percent');
      elementItem.animate({width: skillBarAmount}, 800);
      elementItem.closest('.progress-item').find('.percent').text(skillBarAmount);
    });
  });

  var chartSelector = $(".pie-chart-circle");
  chartSelector.each(function() {
    $(this).appear(function() {
      var $this = $(this),
        amount = '<span class="skill-percent">' + $this.data('percent') + '%</span>';
      $this.html(amount);
      $this.easyPieChart({
        trackColor: $this.data('track-color'),
        lineCap: $this.data('line-cap'),
        scaleColor: false,
        lineWidth: $this.data('line-width'),
      });
    })
  });

  //Parallax Motion Animation 
  $('.scene').each(function () {
    new Parallax($(this)[0]);
  });

  // Fancybox Js
  $('.lightbox-image').fancybox();

  //Video Popup
  $('.play-video-popup').fancybox();

  // Scroll Top Hide Show
  var varWindow = $(window);
  varWindow.on('scroll', function(){
    if ($(this).scrollTop() > 250) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }

    // Sticky Header
    if($('.sticky-header').length){
      var windowpos = $(this).scrollTop();
      if (windowpos >= 80) {
        $('.sticky-header').addClass('sticky');
      } else {
        $('.sticky-header').removeClass('sticky');
      }
    }
  });

  // Ajax Contact Form JS
  var form = $('#contact-form');
  var formMessages = $('.form-message');

  $(form).submit(function(e) {
    e.preventDefault();
    var formData = form.serialize();
    $.ajax({
        type: 'POST',
        url: form.attr('action'),
        data: formData
    }).done(function(response) {
        // Make sure that the formMessages div has the 'success' class.
        $(formMessages).removeClass('alert alert-danger');
        $(formMessages).addClass('alert alert-success fade show');

        // Set the message text.
        formMessages.html("<button type='button' class='btn-close' data-bs-dismiss='alert'>&times;</button>");
        formMessages.append(response);

        // Clear the form.
        $('#contact-form input,#contact-form textarea').val('');
    }).fail(function(data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass('alert alert-success');
        $(formMessages).addClass('alert alert-danger fade show');

        // Set the message text.
        if (data.responseText !== '') {
            formMessages.html("<button type='button' class='btn-close' data-bs-dismiss='alert'>&times;</button>");
            formMessages.append(data.responseText);
        } else {
            $(formMessages).text('Oops! An error occurred and your message could not be sent.');
        }
    });
  });
  
  //Counter JS
  var counterId = $('.counter-animate');
  if (counterId.length) {
    counterId.counterUp({
      delay: 10,
      time: 1000
    });
  }

  //Tilt Animation
  $('.tilt-animation').tilt({
    base: window,
    reset: !0, 
    scale: 1.04, 
    reverse: !1, 
    max: 15, 
    perspective: 3e3, 
    speed: 4e3
  });

  //Scroll To Top
  $('.scroll-to-top').on('click', function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });

  // Reveal Footer JS
  let revealId = $(".reveal-footer"),
    footerHeight = revealId.outerHeight(),
    windowWidth = $(window).width(),
    windowHeight = $(window).outerHeight();

  if (windowWidth > 991 && windowHeight > footerHeight) {
    $(".site-wrapper-reveal").css({
      'margin-bottom': footerHeight + 'px'
    });
  }
  
  
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
  
  varWindow.on('load', function() {
    AOS.init({
      once: true,
    });
    stylePreloader();
  });
  

})(window.jQuery);