
//ハンバーガーボタン
$('.burger-btn, .nav-item a').on('click',function(){
    $('.burger-btn').toggleClass('close');
    $('.nav-wrapper').fadeToggle(500);
    $('html').toggleClass('noscroll');
   });
  
//import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'
var swiper = new Swiper('#swp1', {
    centeredSlides: true,
    slidesPerView: 1.0,
    spaceBetween: 5,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        769: {
            slidesPerView: 1,
        }
    }
});

var swiper = new Swiper('#swp2', {
    centeredSlides: true,
    slidesPerView: 1.0,
    spaceBetween: 5,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        769: {
            slidesPerView: 1,
        }
    }
});

var swiper = new Swiper('#swp3', {
    centeredSlides: true,
    slidesPerView: 1.0,
    spaceBetween: 5,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        769: {
            slidesPerView: 1,
        }
    }
});

var swiper = new Swiper('#swp4', {
    centeredSlides: true,
    slidesPerView: 1.0,
    spaceBetween: 5,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        769: {
            slidesPerView: 1,
        }
    }
});

var swiper = new Swiper('#swp5', {
    centeredSlides: true,
    slidesPerView: 1.0,
    spaceBetween: 5,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        769: {
            slidesPerView: 1,
        }
    }
});
$("a").click(function () {
    $("html, body").animate({scrollTop: $($(this).attr("href")).offset().top -20+ "px"}, 500);

    return false;//不要这句会有点卡顿

});