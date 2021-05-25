import Swiper, { Pagination, Autoplay } from 'swiper';
// import aos from 'aos/dist/aos.js';

// aos.init({
//   delay: 300,
// });

var $ = jQuery;
Swiper.use([Pagination, Autoplay]);
const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  slidesPerView: 4,
  spaceBetween: 20,
  autoplay: true,
  grabCursor: true,
  breakpoints: {
    // when window width is >= 320px
    250: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    530: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 640px
    768: {
      slidesPerView: 3,
      spaceBetween: 40
    },

    1200: {
      slidesPerView: 4,
      spaceBetween: 40
    }
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  }
});

const clientSwiper = new Swiper('.client-slider', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay: {
    delay: 3000,
    },
  breakpoints: {
    // when window width is >= 320px
    250: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    530: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 640px
    768: {
      slidesPerView: 3,
      spaceBetween: 40
    },

    1200: {
      slidesPerView: 4,
      spaceBetween: 40
    }
  }
});

function headerScroll () {
  let scrollpos = window.scrollY
  const header = document.querySelector(".site-header")
  const header_height = header.offsetHeight


  const add_class_on_scroll = () => header.classList.add("shadow")
  const remove_class_on_scroll = () => header.classList.remove("shadow")

  window.addEventListener('scroll', function() {
    scrollpos = window.scrollY;

    if (scrollpos >= header_height) { add_class_on_scroll() }
    else { remove_class_on_scroll() }

    // console.log(scrollpos)
  })
}
headerScroll();

function mobileMenu() {
  $(document).ready(function(){
    $('#nav-burger').click(function(){
      $(this).toggleClass('open');
      $('body').toggleClass('menu-open');
    });
  });
}

mobileMenu();

window.addEventListener('load', (event) => {
  $("#landing-gif").removeClass("display-none");
});



function faq_blokken(){
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      this.previousElementSibling.classList.toggle("opened");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
}

faq_blokken();

var acc = document.getElementsByClassName("mobile-toggler");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
  //   var panel = this.parentNode.lastChild;
  //   if (panel.style.maxHeight) {
  //     panel.style.maxHeight = null;
  //   } else {
  //     panel.style.maxHeight = panel.scrollHeight + "px";
  //   }
  });
}
