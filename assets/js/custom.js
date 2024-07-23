$(document).ready(function(){
 /* FAQ JS */

 jQuery('.accordion_question').click(function(){
    jQuery('.accordion_answer').slideUp();
    jQuery('.accordion-box').removeClass('active');
     if(jQuery(this).parent().find('.accordion_answer').is(':visible')){
        jQuery(this).parent().find('.accordion_answer').slideUp();
        jQuery(this).parent().removeClass('active');
     }
     else{
        jQuery(this).parent().find('.accordion_answer').slideDown();
        jQuery(this).parent().addClass('active');
     }
});

// $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
//     disableOn: 700,
//     type: 'iframe',
//     mainClass: 'mfp-fade',
//     removalDelay: 160,
//     preloader: false,
//     fixedContentPos: false,
//     callbacks:{
//       open:function(){
//         $('body').css('overflow','hidden');
//       },
//       close:function(){
//         $('body').css('overflow','');
//       }
//     }
//   });

$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('.inner-menu').addClass('fixed-header');
        $('body').addClass('visible-title');
    }
    else {
        $('.inner-menu').removeClass('fixed-header');
        $('body').removeClass('visible-title');
    }
});
  
/* gallery slider Our Facility */

    $('.our-gallery .popup-gallery').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '200px',
        arrows: true,
        prevArrow: '<div class="slick-prev slick-arrow"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8458 7.24791L10.5315 12.5623L15.8458 17.8766L15.8458 17.8766C16.4316 18.4624 16.4316 19.4121 15.8458 19.9979C15.26 20.5837 14.3103 20.5837 13.7245 19.9979L7.34955 13.6229C6.76375 13.0371 6.76375 12.0874 7.34954 11.5016C7.34955 11.5016 7.34955 11.5016 7.34955 11.5016L13.7245 5.12659L13.9788 5.38091L13.7245 5.12659C14.3103 4.54081 15.26 4.54081 15.8458 5.12659C16.4316 5.71237 16.4316 6.66213 15.8458 7.24791Z" fill="#DB9F05" stroke="#DB9F05" stroke-width="0.75"/></svg></div>',
        nextArrow: '<div class="slick-arrow slick-next"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.85145 6.70299L15.1658 12.0173L9.85144 17.3317L9.85144 17.3317C9.26567 17.9175 9.26567 18.8671 9.85144 19.4529C10.4372 20.0387 11.387 20.0387 11.9728 19.4529L18.3477 13.078C18.9335 12.4922 18.9335 11.5425 18.3477 10.9567C18.3477 10.9567 18.3477 10.9567 18.3477 10.9567L11.9728 4.58167L11.7184 4.83599L11.9728 4.58167C11.387 3.99589 10.4372 3.99589 9.85145 4.58167C9.26566 5.16745 9.26566 6.11721 9.85145 6.70299Z" fill="#DB9F05" stroke="#DB9F05" stroke-width="0.75"/></svg></div>',
        responsive: [
            {
            breakpoint: 1199,
            settings: {
                centerMode: true,
                centerPadding: '100px',
                slidesToShow: 2
            }
            },
            {
            breakpoint: 767,
            settings: {
                centerMode: true,
                centerPadding: '50px',
                slidesToShow: 1
            }
            }
        ]
    });
    

    jQuery('.team_nav li a').click(function(){
        jQuery('html, body').animate({
            scrollTop: jQuery( jQuery(this).attr('href') ).offset().top - 180
        }, 0);
        return false;
    });
   

    // Cache selectors
    var topMenu = jQuery(".team_nav"),
        topMenuHeight = topMenu.outerHeight()+15,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
        var item = jQuery(jQuery(this).attr("href"));
        if (item.length) { return item; }
        });

    // Bind to scroll
    jQuery(window).scroll(function(){
    // Get container scroll position
    var fromTop = jQuery(this).scrollTop()+topMenuHeight;

    // Get id of current scroll item
    var cur = scrollItems.map(function(){
        if (jQuery(this).offset().top < fromTop)
        return this;
    });
    // Get the id of the current element
    cur = cur[cur.length-1];
    var id = cur && cur.length ? cur[0].id : "";
    // Set/remove active class
    menuItems
        .parent().removeClass("active")
        .end().filter("[href='#"+id+"']").parent().addClass("active");
    });


$('#exampleModal').on('shown.bs.modal', function () {
    $('iframe')[0].play();
  })
  $('#exampleModal').on('hidden.bs.modal', function () {
    $('iframe')[0].pause();
  })
  
  var temp = jQuery("<input>");
var url = jQuery(location).attr('href');
    jQuery('#copy_url').click( function() {
        
        jQuery("body").append(temp);
        temp.val(url).select();
        document.execCommand("copy");
        temp.remove();
        jQuery(".copied_text").show();
        
    });

	function stickyHeader(){
		var scrollDirection = "";
		var lastScrollPosition = 0;

		// Clone and make header sticky if the element with class 'xb-header' exists
		if (jQuery('.site-header').length) {
			jQuery('.site-header').addClass('original').clone(true).insertAfter('.site-header').addClass('xb-header-area-sticky xb-sticky-stt').removeClass('original');
		}

		// Handle scroll events
		jQuery(window).on("scroll", function () {
			var currentScrollPosition = jQuery(window).scrollTop();
			// Determine scroll direction
			scrollDirection = currentScrollPosition < lastScrollPosition ? "up" : "down";
			lastScrollPosition = currentScrollPosition;
			   
			// Check if element with ID 'xb-header-area' has class 'is-sticky'
			if (jQuery(".site-header")) {
				// Add or remove classes based on scroll position for sticky header and mobile header
				if (lastScrollPosition > 100) {
					jQuery(".xb-header-area-sticky.xb-sticky-stb").addClass("xb-header-fixed");
				} else {
					jQuery(".xb-header-area-sticky.xb-sticky-stb").removeClass("xb-header-fixed");
				}

				// Add or remove classes for sticky header based on scroll direction
				if (lastScrollPosition > 100) {
					jQuery(".xb-header-area-sticky.xb-sticky-stt").addClass("xb-header-fixed");
				} else {
					jQuery(".xb-header-area-sticky.xb-sticky-stt").removeClass("xb-header-fixed");
				}
			}
		});

	}

	stickyHeader();

    $('<span class="arrow"><svg width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2715 0.719668C10.5644 1.01256 10.5644 1.48744 10.2715 1.78033L6.02154 6.0303C5.72865 6.3232 5.25377 6.3232 4.96088 6.0303L0.710878 1.78033C0.417988 1.48744 0.417988 1.01256 0.710878 0.719668C1.00377 0.426777 1.47865 0.426777 1.77154 0.719668L5.49121 4.43934L9.21091 0.719668C9.50381 0.426777 9.97861 0.426777 10.2715 0.719668Z" fill="#000"/> </svg></span>'
	).appendTo("header .main-navigation li.menu-item-has-children");


    // mobile menu open 
        jQuery(document).on("click", '.menubar-btn, .menubar-btn-close', function () {
            jQuery('.mobile-menu-wp').toggleClass('is-open');
            jQuery('.offcanvas-bg').toggleClass('overlay-open');
            jQuery('body').toggleClass('overflow-hidden');
        });
        
        jQuery(document).on("click", '.offcanvas-bg', function () {
            jQuery('.mobile-menu-wp').toggleClass('is-open');
            jQuery(this).toggleClass('overlay-open');
            jQuery('body').toggleClass('overflow-hidden');
        });


        // footer logo slider 
    function logoSlider(){
        jQuery('.flag-slider').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 8000,
            pauseOnHover: false,
            cssEase: 'linear',
            arrows: false,
             });
    }

    function unslickSlick(){
        if(jQuery('.flag-slider').hasClass('slick-initialized')){
			jQuery('.flag-slider').slick('unslick');
		}
    }

    function checkWindowWidth(){
        if(jQuery(window).width()<= 767 && !jQuery('.flag-slider').hasClass('slick-initialized')){
            logoSlider()
        }else if(jQuery(window).width()> 767 && jQuery('.flag-slider').hasClass('slick-initialized')){
            unslickSlick()
        }
    }

    checkWindowWidth();
$(window).on('resize' , function(){
    checkWindowWidth();
})
       
})

// We listen to the resize event
window.addEventListener('resize', () => {
    // We execute the same script as before
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
});
jQuery(document).ready(function(){
    let vh = window.innerHeight * 0.01;
   document.documentElement.style.setProperty('--vh', `${vh}px`);
})

jQuery(window).on('load', function (e) {

    if (jQuery('.mobile-menu-wp').length > 0) {
        jQuery('nav.mobile-menu-items .sub-menu').css('display', 'none ');
        jQuery('nav.mobile-menu-items .menu-link-wrap li .dropdown').hide();
        jQuery('nav.mobile-menu-items .sub-menu').prev().prev().addClass('submenu');
        jQuery('nav.mobile-menu-items .sub-menu').before('<span class="toggledrop"><i class="ion ion-ios-arrow-down"></i></span>');
  
        jQuery('nav.mobile-menu-items .menu-link-wrap i').on('click', function () {
            jQuery(this).next('.children, .sub-menu').slideToggle();
        });
        
        jQuery('nav.mobile-menu-items .menu-link-wrap .menu-item .toggledrop').off('click');
        jQuery('nav.mobile-menu-items .menu-item .toggledrop').on('click', function () {
            e.preventDefault();
            if (!jQuery(this).closest('ul').parent('li').find('.toggledrop').hasClass('active') && !jQuery(this).hasClass('active')) {
                jQuery('nav.mobile-menu-items .menu-item .children , nav.mobile-menu-items .menu-item .sub-menu').slideUp();
              
                jQuery('nav.mobile-menu-items .menu-item .toggledrop').removeClass('active');
            }
            jQuery(this).next('.children, .sub-menu').slideToggle();
            jQuery(this).toggleClass('active');
        });
    }
});



     jQuery('.book-online-list').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows:false
    });
		