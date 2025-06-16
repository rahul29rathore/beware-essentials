//============RevSlider============//
/*setREVStartSize({
    c: 'rev_slider_2_1',
    rl: [1240, 1024, 778, 480],
    el: [],
    gw: [1200],
    gh: [700],
    type: 'standard',
    justify: '',
    layout: 'fullwidth',
    mh: "0"
});
var revapi2,
    tpj;

function revinit_revslider21() {
    jQuery(function() {
        tpj = jQuery;
        revapi2 = tpj("#rev_slider_2_1");
        if(revapi2 == undefined || revapi2.revolution == undefined) {
            revslider_showDoubleJqueryError("rev_slider_2_1");
        } else {
            revapi2.revolution({
                visibilityLevels: "1240,1024,778,480",
                gridwidth: 1200,
                gridheight: 539,
                spinner: "spinner0",
                perspectiveType: "local",
                responsiveLevels: "1240,1024,778,480",
                progressBar: {
                    disableProgressBar: true
                },
                navigation: {
                    mouseScrollNavigation: false,
                    onHoverStop: true,
                    arrows: {
                        enable: true,
                        style: "uranus",
                        hide_onleave: true,
                        left: {},
                        right: {}
                    }
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true
                },
            });
        }
    });
} // End of RevInitScript
var once_revslider21 = false;
if(document.readyState === "loading") {
    document.addEventListener('readystatechange', function() {
        if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider21) {
            once_revslider21 = true;
            revinit_revslider21();
        }
    });
} else {
    once_revslider21 = true;
    revinit_revslider21();
}


var htmlDivCss = unescape("%23rev_slider_2_1_wrapper%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_2_1_wrapper%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_2_1_wrapper%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A");
var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
if(htmlDiv) {
    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
} else {
    var htmlDiv = document.createElement('div');
    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
}


var htmlDivCss = unescape("%0A%0A%0A");
var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
if(htmlDiv) {
    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
} else {
    var htmlDiv = document.createElement('div');
    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
}*/

jQuery('.main-slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1
});

//============Product Slick Slider==========//
jQuery('.cctv-products').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

//============Product Slick Slider==========//
jQuery('.baby-monitoring-features').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    autoplay: true,
    slidesToShow:1,
    slidesToScroll: 1,
});

//============Featured Product Slider==========//
jQuery('.featured-product-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

//============Client Slider 1==========//
jQuery('#client-slider-1').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 6000,
    autoplaySpeed: 1,
    cssEase: 'linear',
    waitForAnimate: false,
    pauseOnFocus: false, 
    pauseOnHover: false,
    autoplay: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
    ]
});
jQuery('#client-slider-2').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 6000,
    autoplaySpeed: 1,
    cssEase: 'linear',
    waitForAnimate: false,
    pauseOnFocus: false, 
    pauseOnHover: false,
    autoplay: true,
    slidesToShow: 6,
    slidesToScroll: -1,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: -1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 4,
                slidesToScroll: -1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: -1
            }
        }
    ]
});
jQuery('.blog-slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});


jQuery('.widget_product_categories ul li a').on('click',function(){
    if(jQuery(this).attr('data-val')==0){
        jQuery(this).attr('data-val',1);
        //jQuery(this).next('ul').slideDown();
    }
    else{
        jQuery(this).attr('data-val',0);
        //jQuery(this).next('ul').slideUp()
    }
})

//======Element Animation Initialisation========//
AOS.init({
    easing: 'ease',
    duration: 500,
    once: true,
    offset:0
});



jQuery('.main-p-thumb').on('click',function(){
    var imgSrc = jQuery(this).attr('src');
    jQuery('.main-p-img, .easyzoom-flyout img').attr('src',imgSrc);
    jQuery('.main-p-img').parent('a').attr('href',imgSrc);
})
jQuery('.easyzoom').mouseover(function(){
    var imgSrc = jQuery(this).find('.main-p-img').attr('src');
    // Instantiate EasyZoom plugin
    jQuery('.easyzoom').easyZoom();
    jQuery('.easyzoom-flyout img').attr('src',imgSrc);
})

//=================Navigation Toggle=============//
jQuery('#dt-menu-toggle').on('click',function(){
    jQuery('#main-menu .menu').toggleClass('menu-toggle-open').slideToggle();
})

//================Popup Leadform================//
jQuery('.btn-leadform').on('click',function(){
    jQuery('.lead-popup-container').addClass('active');
})
jQuery('.close-leadform,.btn-close-leadform').on('click',function(){
    jQuery('.lead-popup-container').removeClass('active');
})

jQuery(document).ready(function(){
    jQuery("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[769,1],
        pagination:true,
        //transitionStyle:"goDown",
        autoPlay:true,
        loop:true
    });
});

//==========Custom Cursor===========//
function mousemoveHandler(e) {
    try {
      const target = e.target;

      let tl = gsap.timeline({
        defaults: {
          x: e.clientX,
          y: e.clientY,
        }
      })
      let t2 = gsap.timeline({
        defaults: {
          x: e.clientX,
          y: e.clientY,
        }
      })

      // Main Cursor Moving 
      tl.to(".cursor1", {
        ease: "power2.out"
      })
        .to(".cursor2", {
          ease: "power2.out"
        }, "-=0.4")

    } catch (error) {
      console.log(error)
    }

  }
  document.addEventListener("mousemove", mousemoveHandler);


//===========Scroll Top============//
let scroll_top = document.getElementById("scroll_top");
if (scroll_top) {
  window.onscroll = function () {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      scroll_top.style.display = "block";
    } else {
      scroll_top.style.display = "none";
    }
  };

  scroll_top.addEventListener('click', function () {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  });
}
//============Typing Js========//
var typed = new Typed('#typed', {
    strings: ["BUSINESS PROFESSIONALS", "SECURITY PROFESSIONALS", "HOME SECURITY"],
    typeSpeed: 50,
    loop: true,
    backDelay: 900,
    backSpeed: 30,
});
//============Typing Js End========//


