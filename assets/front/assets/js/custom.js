!function(e){"use strict";e(document).ready(function(){var a,t;e("#main-menu").meanmenu({meanScreenWidth:"992",meanMenuContainer:".mobile-nav-menu"}),e(".all-patner").owlCarousel({autoplay:!0,pagination:!1,nav:!1,dots:!0,items:6,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],responsive:{0:{items:2},600:{items:2},768:{items:4},992:{items:5},1000:{items:6}}}),e(".all-slide").owlCarousel({items:1,nav:!0,dots:!0,autoplay:!0,loop:!0,smartSpeed:1e3,autoplayTimeout:4e3,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],mouseDrag:!1,touchDrag:!1}),e(".all-slide").on("translate.owl.carousel",function(){e(".slider-text h1").removeClass("animated fadeInUp").css("opacity","0"),e(".slider-text p").removeClass("animated fadeInDown").css("opacity","0"),e(".slider-text ul").removeClass("animated fadeInDown").css("opacity","0")}),e(".all-slide").on("translated.owl.carousel",function(){e(".slider-text h1").addClass("animated fadeInUp").css("opacity","1"),e(".slider-text p").addClass("animated fadeInDown").css("opacity","1"),e(".slider-text ul").addClass("animated fadeInDown").css("opacity","1")}),e.scrollUp({scrollText:'<i class="fa fa-long-arrow-up"></i>',easingType:"linear",scrollSpeed:900,animation:"fade"}),e(".all-project").slick({centerMode:!0,centerPadding:"0px",slidesToShow:3,autoplay:!0,prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",responsive:[{breakpoint:768,settings:{arrows:!1,centerMode:!0,autoplay:!0,centerPadding:"0px",slidesToShow:3}},{breakpoint:767,settings:{centerMode:!0,autoplay:!0,centerPadding:"0px",slidesToShow:2}},{breakpoint:420,settings:{centerMode:!0,autoplay:!0,centerPadding:"0px",slidesToShow:1}}]}),e(".popup-gallery").magnificPopup({type:"image",closeOnContentClick:!0,closeBtnInside:!1,fixedContentPos:!0,mainClass:"mfp-no-margins mfp-with-zoom",image:{verticalFit:!0},zoom:{enabled:!0,duration:300}}),a=e(".hd-sec"),t=!1,e(window).scroll(function(){120<e(window).scrollTop()&&!t&&(a.addClass("sticky_menu animated fadeInDown").animate({"margin-top":"0px"}),t=!0),120>e(window).scrollTop()&&t&&(a.removeClass("sticky_menu animated fadeInDown").css("margin-top","0px"),t=!1)}),e(window).on("load",function(){e("#preloader").fadeOut(),e("#preloader-status").delay(200).fadeOut("slow"),e("body").delay(200).css({"overflow-x":"hidden"})})})}(jQuery);