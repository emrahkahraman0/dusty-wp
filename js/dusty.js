//JS

//Lazy-Load
var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazyload"
});

//Menu
$(function () {
    $('.hamburger').on('click', function () {
        $('.toggle').toggleClass('open');
        $('.menu').toggleClass('open');
    });
});

//Home-Slider-Owl
$(document).ready(function(){
        
    let owl = $(".home-slider-owl").owlCarousel({
        autoplay :false,
        dots:true,
        dotsData:true,
        loop:true,
        nav:false,
        items: 1
    });

    $('.owl-dot').click(function() {
        owl.trigger('to.owl.carousel',[$(this).index(), 1000]);
    });
});

//Home-Services-Owl
$('.home-services-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:false,
    autoplayTimeout:1000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:1
        },
        700:{
            items:2
        },
        1000:{
            items:3
        },
        1200:{
            items:4
        },
        1400:{
            items:4
        },
        1600:{
            items:4
        }
    }
});

//Home-Features-Owl
$('.home-features-owl').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots:true,
    autoplay:false,
    autoplayTimeout:1000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:1
        },
        700:{
            items:1
        },
        1000:{
            items:1
        },
        1200:{
            items:1
        },
        1400:{
            items:1
        },
        1600:{
            items:1
        }
    }
});

//Home-Brands-Owl
$('.home-brands-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:false,
    autoplayTimeout:1000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:1
        },
        700:{
            items:2
        },
        1000:{
            items:3
        },
        1200:{
            items:4
        },
        1400:{
            items:5
        },
        1600:{
            items:5
        }
    }
});

//About-Team-Owl
$('.about-team-owl').owlCarousel({
    loop:true,
    margin:15,
    nav:false,
    dots:true,
    autoplay:false,
    autoplayTimeout:1000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:1
        },
        700:{
            items:2
        },
        1000:{
            items:3
        },
        1200:{
            items:4
        },
        1400:{
            items:4
        },
        1600:{
            items:4
        }
    }
});

//About-Counter
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

//Faq-Accordion
const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));