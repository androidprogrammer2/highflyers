jQuery(document).ready(function(){

// feature-slider
let featureSilder = $('.feature-slider')
let coutFeaureSlider = featureSilder.children().length;

    function sliderFea(){
        featureSilder.slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: false,
            autoplay: false,
            prevArrow: '<div class="slick-prev slick-arrow"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8458 7.24791L10.5315 12.5623L15.8458 17.8766L15.8458 17.8766C16.4316 18.4624 16.4316 19.4121 15.8458 19.9979C15.26 20.5837 14.3103 20.5837 13.7245 19.9979L7.34955 13.6229C6.76375 13.0371 6.76375 12.0874 7.34954 11.5016C7.34955 11.5016 7.34955 11.5016 7.34955 11.5016L13.7245 5.12659L13.9788 5.38091L13.7245 5.12659C14.3103 4.54081 15.26 4.54081 15.8458 5.12659C16.4316 5.71237 16.4316 6.66213 15.8458 7.24791Z" fill="#DB9F05" stroke="#DB9F05" stroke-width="0.75"/></svg></div>',
            nextArrow: '<div class="slick-arrow slick-next"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.85145 6.70299L15.1658 12.0173L9.85144 17.3317L9.85144 17.3317C9.26567 17.9175 9.26567 18.8671 9.85144 19.4529C10.4372 20.0387 11.387 20.0387 11.9728 19.4529L18.3477 13.078C18.9335 12.4922 18.9335 11.5425 18.3477 10.9567C18.3477 10.9567 18.3477 10.9567 18.3477 10.9567L11.9728 4.58167L11.7184 4.83599L11.9728 4.58167C11.387 3.99589 10.4372 3.99589 9.85145 4.58167C9.26566 5.16745 9.26566 6.11721 9.85145 6.70299Z" fill="#DB9F05" stroke="#DB9F05" stroke-width="0.75"/></svg></div>',
            responsive: [
      
              {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  infinite: true,
                }
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true,
                }
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true,
                }
              },
              {
                breakpoint: 575,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  centerMode: true,
                  centerPadding: '30px',
                }
              }
          
            ]
          })
    }

   

    function unslickSlider(){
        if(featureSilder.hasClass('slick-initialized')){
            featureSilder.slick('unslick')
        }
    }

    function checkWidWidthMain(){
        if(jQuery(window).width()<= 1199 && !featureSilder.hasClass('slick-initialized') || coutFeaureSlider > 5 ){
            sliderFea()
        }else if(jQuery(window).width()> 1199 && featureSilder.hasClass('slick-initialized')){
            unslickSlider()
        }
    }
   

checkWidWidthMain();

// gallerySlide

let imageGallery = $('.slider-gallery-main .popup-gallery')
let gallerySlideCount = imageGallery.children().length;

function gallerySlide(){
  imageGallery.slick( {
    infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            autoplay: true,
            prevArrow: '<div class="slick-prev slick-arrow"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8458 7.24791L10.5315 12.5623L15.8458 17.8766L15.8458 17.8766C16.4316 18.4624 16.4316 19.4121 15.8458 19.9979C15.26 20.5837 14.3103 20.5837 13.7245 19.9979L7.34955 13.6229C6.76375 13.0371 6.76375 12.0874 7.34954 11.5016C7.34955 11.5016 7.34955 11.5016 7.34955 11.5016L13.7245 5.12659L13.9788 5.38091L13.7245 5.12659C14.3103 4.54081 15.26 4.54081 15.8458 5.12659C16.4316 5.71237 16.4316 6.66213 15.8458 7.24791Z" fill="#DB9F05" stroke="#DB9F05" stroke-width="0.75"/></svg></div>',
            nextArrow: '<div class="slick-arrow slick-next"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.85145 6.70299L15.1658 12.0173L9.85144 17.3317L9.85144 17.3317C9.26567 17.9175 9.26567 18.8671 9.85144 19.4529C10.4372 20.0387 11.387 20.0387 11.9728 19.4529L18.3477 13.078C18.9335 12.4922 18.9335 11.5425 18.3477 10.9567C18.3477 10.9567 18.3477 10.9567 18.3477 10.9567L11.9728 4.58167L11.7184 4.83599L11.9728 4.58167C11.387 3.99589 10.4372 3.99589 9.85145 4.58167C9.26566 5.16745 9.26566 6.11721 9.85145 6.70299Z" fill="#DB9F05" stroke="#DB9F05" stroke-width="0.75"/></svg></div>',
            responsive: [
      
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  infinite: true,
                  arrow:false
                }
              },
              {
                breakpoint: 767,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true,
                  arrow:false
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrow:false
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrow:false
                }
              }
          
            ]
  })
}

function unslickGallerySlide(){
   if(imageGallery.hasClass('slick-initialized')){
      imageGallery.slick('unslick')
   }
}

function checkwidthGallery(){
  if(jQuery(window).width()< 768 && !imageGallery.hasClass('slick-initialized') || gallerySlideCount > 4){
    gallerySlide()
  } else if(jQuery(window).width()>=768 && imageGallery.hasClass('slick-initialized')){
    unslickGallerySlide()
  }
}
checkwidthGallery();


// popup-gallery
$('.popup-gallery').magnificPopup({
  delegate: 'a',
  type: 'image',
  tLoading: 'Loading image #%curr%...',
  mainClass: 'mfp-img-mobile',
  gallery: {
    enabled: true,
    navigateByImgClick: true,
    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
  },
  image: {
    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
  }
});

//popup youtube
$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
  type: 'iframe',
  mainClass: 'mfp-fade',
  removalDelay: 160,
  preloader: false,
  fixedContentPos: false,
  callbacks:{
    open:function(){
      $('body').css('overflow','hidden');
    },
    close:function(){
      $('body').css('overflow','');
    }
  }
});


if($('.facility-slider').length > 0 ){
  $('.facility-slider').slick({
    dots: true,
    infinite: true,
    arrows: false,
    speed: 300,
    slidesToShow: 1,
  })
}


  function achievements(){
    if(window.innerWidth <= 767 ){
      if(jQuery('.achievements-wrap').length > 0 && !jQuery('.achievements-wrap').hasClass('slick-initialized')){
        $('.achievements-wrap').slick({
          dots: false,
          infinite: true,
          arrows: false,
          speed: 300,
          slidesToShow: 1,
          autoplay:true,
          autoplaySpeed: 3000,
          cssEase: 'linear',
        })
      }
     
    }else{
      if (jQuery('.achievements-wrap').hasClass('slick-initialized')) {
        jQuery('.achievements-wrap').slick('unslick');
      }
    }
  }

  achievements();


if($('.our-teamslider')){
  var options = {
    effect: "coverflow",
    initialSlide: 2,
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    slidesPerView: '2',
    speed:500,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true
      
    },
    pagination: {
      el: ".swiper-pagination",
       clickable: true
    },
    breakpoints: {
      767: {
        autoHeight: true,
        slidesPerView: 'auto',
      }
    }
  }
  
  var swiper = new Swiper(".our-teamslider", options);
}

if($('.instagram-feed-sec').length > 0) {
  setTimeout(function(){
    $('.eapps-instagram-feed-container ~ a').removeAttr('style');
  },500)

}


$(window).on('resize' , function(){
    checkWidWidthMain();
    checkwidthGallery();
    achievements();
})

})