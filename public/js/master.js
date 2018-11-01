$(document).ready(function() {
  // $(window).scrollTop(function(){
  //   $('.scroll-animations .animated').each(function() {
  //     if (isScrolledIntoView(this) === true) {
  //       $(this).addClass('fadeInLeft');
  //     }
  //   });
  //   $('.news-box').each(function() {
  //     if (isScrolledIntoView(this) === true) {
  //       $(this).addClass('fadeInRight');
  //     }
  //   });
  //   $('.swiper-wrap').each(function() {
  //     if (isScrolledIntoView(this) === true) {
  //       $(this).addClass('fadeInRight');
  //     }
  //   });
  // });

  // $('.slide-judul').css('opacity','1').addClass('zoomIn');
  // $('.slide-ket').css('opacity','1').addClass('zoomIn');

  var didScroll = false;

  $(window).scroll(function() {
      didScroll = true;
  });

  setInterval(function(){
    if (didScroll) {
      didScroll = false;
      var navi = $('.navi').offset().top;
      if ($(this).scrollTop() > 100) {
          $('.navi').addClass('fixed-top fadeInDown');
      } else {
          $('.navi').removeClass('fixed-top fadeInDown');
      }
    }
  },100);
  //
  // Check if element is scrolled into view
  // function isScrolledIntoView(elem) {
  //   var docViewTop = $(window).scrollTop();
  //   var docViewBottom = docViewTop + $(window).height();
  //
  //   var elemTop = $(elem).offset().top;
  //   var elemBottom = elemTop + $(elem).height()-200;
  //
  //   return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  // }
  // If element is scrolled into view, fade it in

  // Check if element is scrolled into view
  // function isScrolled(elem) {
  //   var docViewTop = $(window).scrollTop();
  //
  //   var elemTop = $(elem).offset().top;
  //
  //   return (elemTop >= docViewTop);
  // }
  // If element is scrolled into view, fade it in

  // $(window).scroll(function() {
  //   $('.scroll-animations .animated').each(function() {
  //     if (isScrolledIntoView(this) === true) {
  //       $(this).addClass('fadeInLeft');
  //     }
  //   });
  //   $('.news-box').each(function() {
  //     if (isScrolledIntoView(this) === true) {
  //       $(this).addClass('fadeInRight');
  //     }
  //   });
  //   $('.swiper-wrap').each(function() {
  //     if (isScrolledIntoView(this) === true) {
  //       $(this).addClass('fadeInRight');
  //     }
  //   });
  // });

  // var didScroll = false;
  //
  // $(window).scroll(function() {
  //     didScroll = true;
  // });
  //
  // setInterval(function() {
  //   if (didScroll) {
  //     didScroll = false;
  //
  //     var navi = $('.navi').offset().top;
  //     if ($(this).scrollTop() > 100) {
  //         $('.navi').addClass('fixed-top fadeInDown');
  //     } else {
  //         $('.navi').removeClass('fixed-top fadeInDown');
  //     }
  //
  //     // Check if element is scrolled into view
  //     function isScrolledIntoView(elem) {
  //       var docViewTop = $(window).scrollTop();
  //       var docViewBottom = docViewTop + $(window).height();
  //
  //       var elemTop = $(elem).offset().top;
  //       var elemBottom = elemTop + $(elem).height()-200;
  //
  //       return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  //     }
  //     // If element is scrolled into view, fade it in
  //
  //     // Check if element is scrolled into view
  //     function isScrolled(elem) {
  //       var docViewTop = $(window).scrollTop();
  //
  //       var elemTop = $(elem).offset().top;
  //
  //       return (elemTop >= docViewTop);
  //     }
  //     // If element is scrolled into view, fade it in
  //
  //     $('.scroll-animations .animated').each(function() {
  //       if (isScrolledIntoView(this) === true) {
  //         $(this).addClass('fadeInLeft');
  //       }
  //     });
  //     $('.news-box').each(function() {
  //       if (isScrolledIntoView(this) === true) {
  //         $(this).addClass('fadeInRight');
  //       }
  //     });
  //     $('.swiper-wrap').each(function() {
  //       if (isScrolledIntoView(this) === true) {
  //         $(this).addClass('fadeInRight');
  //       }
  //     });
  //   }
  // }, 25);

  $('.link-cari').on('click',function(e){
    e.preventDefault();
    let cari = $('.banner-cari');

    if(!cari.is(':visible')){
      $('.link-cari i').addClass('fa-close');
      cari.addClass('fadeInUp').show()
      .one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
        cari.removeClass('fadeInUp');
      })
    }else {
      $('.link-cari i').removeClass('fa-close');
      cari.addClass('fadeOutDown')
      .one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
        cari.hide().removeClass('fadeOutDown');
      });
    }
  });

  $(".carousel").on("touchstart", function(event){
    $('.fade-bulat li').removeClass('hov');
    var xClick = event.originalEvent.touches[0].pageX;
      $(this).one("touchmove", function(event){
          var xMove = event.originalEvent.touches[0].pageX;
          if( Math.floor(xClick - xMove) > 4 ){
              $(this).carousel('next');
          }
          else if( Math.floor(xClick - xMove) < -4 ){
              $(this).carousel('prev');
          }
      });
      $(".carousel").on("touchend", function(){
              $(this).off("touchmove");
      });
  });

  var tabChange = function () {
      var tabs = $('#myTab > li');
      var active = tabs.filter('.active');
      var next = active.next('li').length ? active.next('li').find('a') : tabs.eq(0).find('a');
      if(active.next('li').length){
        active.removeClass('active');
        active.next('li').addClass('active');
      }else{
        tabs.eq(0).addClass('active');
      }
      // Use the Bootsrap tab show method
      $('.isi-kategori-item').each(function(){
        $(this).addClass('fadeInRight');
      })
      next.tab('show');
  };
  // Tab Cycle function
  var tabCycle = setInterval(tabChange, 30000);

  // Tab click event handler
  var dipicik = false;
  $('.tab-kat').on('click', function (e) {
    e.preventDefault();
    dipicik = true;
    $(this).tab('show');
    $('.isi-kategori-item').each(function(){
      $(this).addClass('fadeInRight');
    })
  });

  setInterval(function() {
    if (dipicik) {
        dipicik = false;
        // Stop the cycle
        clearInterval(tabCycle);
        // Show the clicked tabs associated tab-pane
        // Start the cycle again in a predefined amount of time
        setTimeout(function () {
            tabCycle = setInterval(tabChange, 30000);
        }, 15000);
    }
  }, 20000);

  // $('.tab-kat').on('click', function (e) {
  //     e.preventDefault();
  //     // Stop the cycle
  //     clearInterval(tabCycle);
  //     // Show the clicked tabs associated tab-pane
  //     $(this).tab('show');
  //     // Start the cycle again in a predefined amount of time
  //     setTimeout(function () {
  //         tabCycle = setInterval(tabChange, 5000);
  //     }, 15000);
  // });

  //swiper
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      fadeShadows : true,
    },
    pagination: {
      el: '.swiper-pagination',
    },
    loop : true
  });

  AOS.init({
    startEvent: 'load',
  });
});
