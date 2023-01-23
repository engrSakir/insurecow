// document.addEventListener("DOMContentLoaded", function () {
//   new Swiper(".swiper-container", {
//     loop: true,
//     slidesPerView: 1,
//     spaceBetween: 32,
//     autoplay: {
//       delay: 4000,
//     },
//     breakpoints: {
//       640: {
//         centeredSlides: true,
//         slidesPerView: 2,
//       },
//       1024: {
//         centeredSlides: false,
//         slidesPerView: 3,
//       },
//     },
//     navigation: {
//       nextEl: ".next-button",
//       prevEl: ".prev-button",
//     },
//   });
// });
 document.addEventListener("DOMContentLoaded", function () {
   new Swiper(".swiper-container", {
     loop: true,
     slidesPerView: 1,
     spaceBetween: 8,
     autoplay: {
       delay: 8000,
     },
     pagination: {
       el: ".swiper-pagination",
       clickable: true,
     },
     breakpoints: {
       640: {
         slidesPerView: 1.5,
       },
       1024: {
         slidesPerView: 3,
       },
     },
   });
 });
