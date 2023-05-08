document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});

//Cards

const showPop = $(".show-pop"),
  closeBtn = $(".close-btn"),
  conPop = $(".pop-container"),
  overlay = $(".overlay");

$(document).ready(function() {
  $("section").fadeIn(1000);
});

showPop.click(function() {
  overlay.addClass("active");
  conPop.slideDown("slow");
});

closeBtn.click(function() {
  overlay.removeClass("active");
  conPop.fadeOut("slow");
});

overlay.click(function() {
  overlay.removeClass("active");
  conPop.fadeOut("slow");
});
$(".hover").mouseleave(
    function () {
        $(this).removeClass("hover");
    }
);

document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide', {
        type   : 'slide',
        perPage : 3,
        perMove : 1,
        gap : '15px',
        width : 'min(1200px, 100% - 60px)',
        // rewind     : true,
        breakpoints: {
            992: {
                perPage: 2,
            },
            480: {
                perPage: 1,
                rewind : true,
            },
        }
    } );
    splide.mount();

} );

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});
$(document).ready(function(){
    //create variable
    var counts = 0;
    $(".addtocart").click(function () {
        //to number and increase to 1 on each click
        counts += +1;
        $(".cart-counter").animate({
            //show span with number
            opacity: 1
        }, 300, function () {
            //write number of counts into span
            $(this).text(counts);
        });
    });
});


