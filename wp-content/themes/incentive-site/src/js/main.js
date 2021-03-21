//Hamburger animated menu
var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
  forEach(hamburgers, function(hamburger) {
	hamburger.addEventListener("click", function() {
	  this.classList.toggle("is-active");
	}, false);
  });
}
//Hamburger animated menu



// jQuery(function() {
//   var jQueryel = jQuery('.weekly-prizes');
//   jQuery(window).on('scroll', function () {
//       var scroll = jQuery(document).scrollTop();
//       jQueryel.css({
//           'background-position':'50% '+(-.25*scroll)+'px'
//       });
//   });
// });



// var a = 0;

// jQuery(document).ready(function(){
//     setInterval(function(){
//         a = (a + 1) > 2 ? 0 : (a + 1);
//         jQuery("#a").text("Carousel-" + a + ".jpg");
//     }, 5000);
// });



// jQuery(document).ready(function() {

//     jQuery('.owl-carousel').owlCarousel({
//         loop:true,
//         margin:10,
//         nav:true,
//         animateIn: 'fadeIn',
//         animateOut: 'fadeout',
//         autoplay:true,
//         responsive:{
//             0:{
//                 items:1
//             },
//             600:{
//                 items:1
//             },
//             1000:{
//                 items:1
//             }
//         }
//     })

// });