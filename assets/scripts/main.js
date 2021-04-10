import Swiper, { Pagination } from 'swiper';

Swiper.use([Pagination]);
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
    320: {
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

let scrollpos = window.scrollY
const header = document.querySelector(".site-header")
const header_height = header.offsetHeight


const add_class_on_scroll = () => header.classList.add("shadow")
const remove_class_on_scroll = () => header.classList.remove("shadow")

window.addEventListener('scroll', function() {
  scrollpos = window.scrollY;

  if (scrollpos >= header_height) { add_class_on_scroll() }
  else { remove_class_on_scroll() }

  console.log(scrollpos)
})
