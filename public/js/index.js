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
